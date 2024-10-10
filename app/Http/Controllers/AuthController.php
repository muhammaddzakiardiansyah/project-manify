<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function showLogin(): View
    {
        return view('auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('message', 'Name or Password incorret!');
    }

    public function showRegister(): View
    {
        return view('auth.register');
    }

    public function register(Request $request): RedirectResponse
    {
        $rules = $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'name' => ['required', 'min:3', 'max:20'],
            'password' => ['required', 'min:6', 'regex:/^[a-zA-Z0-9_\-]*$/'],
            'confirm_password' => ['min:6', 'same:password']
        ]);

        $rules['password'] = Hash::make($request->password);

        User::create($rules);

        return redirect('/login')->with('message', 'Success create new account');
    }
}
