<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
        $email = request()->input('email');
        $password = request()->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            // return 'login success';
            return redirect()->intended('/task');
        } else {
            return '失敗';
        }
    }
}
