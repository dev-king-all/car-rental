<?php

namespace App\Http\Controllers;

use App\Models\AccountActivity;
use App\Models\AdminProfile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Mail;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('admin.dashboard');
    }

    public function accountactivity()
    {
        $activities = AccountActivity::all();
        return view('admin.account_activity', compact('activities'));
    }
    public function deleteactivity($id)
    {
        $activity = AccountActivity::where('id', $id)->first();
        $activity->delete();
        return redirect()->back();
    }
    public function changepassword()
    {
        return view('admin.change_password');
    }
    public function changepasswordform()
    {
        return view('admin.change_password_f');
    }

    public function admin_c_p(Request $request)
    {
        if ($request->password != $request->c_password) {
            return redirect()->back()->withErrors(['password not matched!']);
        }
        else{
            $admin = User::where('id', Auth::id())->first();
            $admin->update([
                'password' => Hash::make($request->password)
            ]);
            $data = array('name'=> $admin->name, 'email'=> $admin->email, 'password'=>$request->password);
            Session::put('data', $data);
            Mail::send('reset-password-email', $data, function($message) {
                $data = Session::get('data');
                $message->to($data['email'], $data['name'], $data['password'])->subject
                ('Password-Changed');
                $message->from(env('MAIL_USERNAME'),'Lara-Master');
            });
            Session::flash('message', 'Password Updated Successfully!');
            return redirect()->back();
        }

    }
    public function profile()
    {
        return view('admin.profile_setting');
    }

    public function updateProfile(Request $request)
    {
        $admin = User::where('id', Auth::id())->first();
        $profile = AdminProfile::where('user_id', Auth::id())->first();
        $admin->update([
            'name' => $request->name
        ]);
        $profile->update($request->all());
        return redirect()->back();
    }
    public function users()
    {
        $users = User::where('role', '!=' ,'SuperAdmin')->get();
        return view('admin.users.list', compact('users'));
    }

    public function verification($id)
    {
        $user = User::where('id', $id)->first();
        $user->update([
            'is_verified' => 1
        ]);

        $data = array('name'=> $user->name, 'email'=> $user->email);
        Session::put('data', $data);
        if ($user->role == 'Admin') {
            Mail::send('verified_admin_email', $data, function ($message) {
                $data = Session::get('data');
                $message->to($data['email'], $data['name'])->subject
                ('Account-Verified');
                $message->from(env('MAIL_USERNAME'), 'Lara-Master');
            });
        }
        elseif ($user->role == 'Agent'){
            Mail::send('verified_agent_email', $data, function ($message) {
                $data = Session::get('data');
                $message->to($data['email'], $data['name'])->subject
                ('Account-Verified');
                $message->from(env('MAIL_USERNAME'), 'Lara-Master');
            });
        }
        else{
            Mail::send('verified_client_email', $data, function ($message) {
                $data = Session::get('data');
                $message->to($data['email'], $data['name'])->subject
                ('Account-Verified');
                $message->from(env('MAIL_USERNAME'), 'Lara-Master');
            });
        }
        return redirect()->back();
    }

    public function verify_user()
    {
        return view('verify');
    }
}
