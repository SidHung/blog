<?php

namespace App\Http\Controllers;

use App\User;
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

    public function logout()
    {
        Auth::logout();

        return redirect()->to('/login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function createUser()
    {
        // 把表單輸入的東西存到 DB
        // 顯示資料在畫面上，到會員資料頁

        // 1. 一個變數，代表表單輸入的資料
        $email = request()->input('email');
        $password = request()->input('password');

        // 2. 該變數資料存到 DB (User 資料表)
        User::create([
            'email' => $email,
            'password' => bcrypt($password)
            ]);

        // 3.將使用者登入
        Auth::attempt([
            'email' => $email,
            'password' => $password
            ]);

        // 4. 把當前登入的使用者帶到會員資料頁
        return redirect()->to('/task');
    }
}
