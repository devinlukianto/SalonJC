<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(RegisterRequest $request)
    {
        $user = new \App\Models\User;
        $user->id    = Input::get('id');
        $user->email    = Input::get('email');
        $user->password = Input::get('password');
        $user->save();

        return redirect('/register');
    }
}
