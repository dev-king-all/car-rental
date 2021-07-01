<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AgentController extends Controller
{
    public function dashboard()
    {
        if(Auth::user()->role == 'Agent'){
            return view('agent/dashboard');
        }
        else{
            Auth::logout();
            return redirect()->back();
        }
    }
}
