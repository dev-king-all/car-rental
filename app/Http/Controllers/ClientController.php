<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function dashboard()
    {
        if(Auth::user()->role == 'Client'){
        return view('client/dashboard');
        }
        else{
            Auth::logout();
            return redirect()->back();
        }
    }
}
