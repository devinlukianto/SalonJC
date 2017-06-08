<?php

namespace App\Http\Controllers;

use Validator;
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
    public function doLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('loginget')
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = new \App\Models\User;
            $user->email    = Input::get('email');
            $user->password = Input::get('password');

            if (Auth::attempt(['email' => $user->email, 'password' => $user->password])) {
            // Authentication passed...
                return redirect()->route('adminhome')->with('status', 'You are logged in as administrator');
            } else {
                return redirect()->route('loginget')->with('status', 'Please insert a correct combination of id and password');
            }
        }
    }

    //GUEST MODE
    public function doGuest()
    {
        return redirect()->route('homeroute')->with('status', 'You are now logged in as a guest');
    }

    public function doLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('homeroute')->with('status', 'You are logged out');
    }
}