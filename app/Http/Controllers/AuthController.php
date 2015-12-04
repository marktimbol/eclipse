<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
    	return view('auth.login');
    }

    public function postLogin(AuthLoginRequest $request) {

        $credentials = [
            'email' => $request->email,
            'password'  => $request->password
        ];

        if( auth()->attempt($credentials, $request->remember) ) {
            return redirect()->intended('admin');
        }

        return redirect()->back()->with('error', "Email and Password combination didn't match our records.");

    }

    public function register() {
    	return view('auth.register');
    }

    public function postRegister(AuthRegisterRequest $request) {
        $user = User::create($request->all());
        auth()->login($user);

        //fire an event that sends welcome email.

        return redirect()->intended('admin');
    }

    public function logout() {
    	auth()->logout();
    	return redirect()->route('home');
    }
}
