<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showPage()
    {
        return view('login');
    }

    //LOGIN MODE
    public function doLogin()
    {
        $user = new \App\Models\User;
        $user->email    = Input::get('email');
        $user->password = Input::get('password');

        if (Auth::attempt(['email' => $user->email, 'password' => $user->password])) {
            // Authentication passed...
            return redirect('home')->with('status', 'You are logged in');
        } else {
            return redirect('login')->with('status', 'Please insert correct combination of email and password!');
        }
    }

    //GUEST MODE
    public function doGuest()
    {
        return redirect('home')->with('status', 'You are now logged in as a guest');
    }

    public function doLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('home')->with('status', 'You are logged out');
    }
}