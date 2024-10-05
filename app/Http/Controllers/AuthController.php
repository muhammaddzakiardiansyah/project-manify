<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLogin(): View
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
    }

    public function showRegister(): View
    {
        return view('auth.register');
    }
}
