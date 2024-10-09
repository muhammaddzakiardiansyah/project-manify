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

    public function register(Request $request)
    {
        $rules = $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'name' => ['required', 'min:3', 'max:20'],
            'password' => ['required', 'min:6', 'regex:/^[a-zA-Z0-9_\-]*$/'],
            'confirm_password' => ['min:6', 'same:password']
        ]);
    }
}
