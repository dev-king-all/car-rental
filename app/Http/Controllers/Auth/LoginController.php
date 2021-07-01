<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AccountActivity;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Browser;
use hisorange\BrowserDetect\Parser;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                 return redirect('/');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'role'=> ucwords(Session::get('role'))
                ]);

                Auth::login($newUser);

                $session_role = ucwords(Session::get('role'));
                if (Auth::user()->role == 'SuperAdmin' && $session_role == 'Admin' || Auth::user()->role == 'Admin' && $session_role == 'Admin'){
                    if(Auth::user()->is_verified == 0){
                        $data = array('name'=> Auth::user()->name);
                        Mail::send('verify_email', $data, function($message) {
                            $message->to(Auth::user()->email, Auth::user()->name)->subject
                            ('Verification-Pending');
                            $message->from(env('MAIL_USERNAME'),'Lara-Master');
                        });
                        Auth::logout();
                        return redirect('/admin/login')->withErrors(['Your account request is in pending and under supervision of Super Admin. Soon your request will be verified.']);
                    }
                    else {
                        $browser = new Parser(null, null, [
                            'cache' => [
                                'interval' => 86400 // This will overide the default configuration.
                            ]
                        ]);
                        $browser = $browser->browserName();
                        AccountActivity::create([
                            'user_id' => Auth::id(),
                            'last_login_browser' => $browser,
                            'last_login_at' => Carbon::now()->toDateTimeString(),
                            'last_login_ip' => $request->getClientIp()
                        ]);
                        return redirect('/admin/dashboard');
                    }
                }
                elseif (Auth::user()->role == 'Agent' && $session_role == 'Agent'){
                    if(Auth::user()->is_verified == 0){
                        $data = array('name'=> Auth::user()->name);
                        Mail::send('verify_email', $data, function($message) {
                            $message->to(Auth::user()->email, Auth::user()->name)->subject
                            ('Verification-Pending');
                            $message->from(env('MAIL_USERNAME'),'Lara-Master');
                        });
                        Auth::logout();
                        return redirect('/agent/login')->withErrors(['Your account request is in pending and under supervision of Super Admin. Soon your request will be verified.']);
                    }
                    else {
                        $browser = new Parser(null, null, [
                            'cache' => [
                                'interval' => 86400 // This will overide the default configuration.
                            ]
                        ]);
                        $browser = $browser->browserName();
                        AccountActivity::create([
                            'user_id' => Auth::id(),
                            'last_login_browser' => $browser,
                            'last_login_at' => Carbon::now()->toDateTimeString(),
                            'last_login_ip' => $request->getClientIp()
                        ]);
                        return redirect('/agent/dashboard');
                    }
                }
                elseif (Auth::user()->role == 'Client' && $session_role == 'Client'){
                    if(Auth::user()->is_verified == 0){
                        $data = array('name'=> Auth::user()->name);
                        Mail::send('verify_email', $data, function($message) {
                            $message->to(Auth::user()->email, Auth::user()->name)->subject
                            ('Verification-Pending');
                            $message->from(env('MAIL_USERNAME'),'Lara-Master');
                        });
                        Auth::logout();
                        return redirect('/client/login')->withErrors(['Your account request is in pending and under supervision of Super Admin. Soon your request will be verified.']);
                    }
                    else {
                        $browser = new Parser(null, null, [
                            'cache' => [
                                'interval' => 86400 // This will overide the default configuration.
                            ]
                        ]);
                        $browser = $browser->browserName();
                        AccountActivity::create([
                            'user_id' => Auth::id(),
                            'last_login_browser' => $browser,
                            'last_login_at' => Carbon::now()->toDateTimeString(),
                            'last_login_ip' => $request->getClientIp()
                        ]);
                        return redirect('/client/dashboard');
                    }
                }
            }

        } catch (Exception $e) {
            return redirect('auth/google');
        }
    }
}
