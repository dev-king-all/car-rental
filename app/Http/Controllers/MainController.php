<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function login ()
    {
        return view ('auth.login');
    }
    function register ()
    {
        return view ('auth.register');
    }
    function agentLogin ()
    {
        return view ('auth.agent.login');
    }
    function agentRegister ()
    {
        return view ('auth.agent.register');
    }
    function clientLogin ()
    {
        return view ('auth.client.login');
    }
    function clientRegister ()
    {
        return view ('auth.client.register');
    }
    function forgotpassword ()
    {
        return view ('auth.forgotpassword');
    }
    function save (Request $request)
    {
        //Validate requests
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'termsandconditions' =>  'required'
        ]);

    }
}
