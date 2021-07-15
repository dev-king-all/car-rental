<?php

namespace App\Http\Controllers;

use App\Models\AccountActivity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Mail;
use Browser;
use hisorange\BrowserDetect\Parser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $session_role = ucwords(Session::get('role'));
        if (Auth::user()->role == 'SuperAdmin' && $session_role == 'Admin' || Auth::user()->role == 'Admin' && $session_role == 'Admin'){
            if(Auth::user()->is_verified == 0){
                $data = array('name'=> Auth::user()->name);
                Mail::send('verify_email', $data, function($message) {
                    $message->to(Auth::user()->email, Auth::user()->name)->subject
                    ('Verification-Pending');
                    $message->from(env('MAIL_USERNAME'),'xFusion App');
                });
                Auth::logout();
                return redirect('/admin/login')->withErrors(['Thank you for Checking up on Us :) Your account has not been approved by our Administrators, please be patient, you should receive a mail from us soon :)']);
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
        elseif (Auth::user()->role != 'SuperAdmin' && $session_role == 'Admin' || Auth::user()->role != 'Admin' && $session_role == 'Admin'){
            Auth::logout();
            return redirect('/admin/login')->withErrors(['The Email or Password you entered is incorrect. Please Try Again.']);
        }
        elseif (Auth::user()->role == 'Agent' && $session_role == 'Agent'){
            if(Auth::user()->is_verified == 0){
                $data = array('name'=> Auth::user()->name);
                Mail::send('verify_email', $data, function($message) {
                    $message->to(Auth::user()->email, Auth::user()->name)->subject
                    ('Verification-Pending');
                    $message->from(env('MAIL_USERNAME'),'xFusion App');
                });
                Auth::logout();
                return redirect('/agent/login')->withErrors(['Thank you for Checking up on Us :) Your account has not been approved by our Administrators, please be patient, you should receive a mail from us soon. :)']);
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
        elseif (Auth::user()->role != 'Agent' && $session_role == 'Agent'){
            Auth::logout();
            return redirect('/agent/login')->withErrors(['The Email or Password you entered is incorrect. Please Try Again.']);
        }
        elseif (Auth::user()->role == 'Client' && $session_role == 'Client'){
            if(Auth::user()->is_verified == 0){
                $data = array('name'=> Auth::user()->name);
                Mail::send('verify_email', $data, function($message) {
                    $message->to(Auth::user()->email, Auth::user()->name)->subject
                    ('Verification-Pending');
                    $message->from(env('MAIL_USERNAME'),'xFusion App');
                });
                Auth::logout();
                return redirect('/client/login')->withErrors(['Thank you for Checking up on Us. :) Your account has not been approved by our Administrators, please be patient, you should receive a mail from us soon. :)']);
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
        elseif (Auth::user()->role != 'Client' && $session_role == 'Client'){
            Auth::logout();
            return redirect('/client/login')->withErrors(['The Email or Password you entered is incorrect. Please Try Again.']);
        }
        else{
            return redirect()->back()->withErrors(['The Email or Password you entered is incorrect. Please Try Again.']);
        }

    }
}
