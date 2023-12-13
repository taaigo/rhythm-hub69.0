<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginRegisterController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function logout() {
        return view('auth.logout');
    }
}
