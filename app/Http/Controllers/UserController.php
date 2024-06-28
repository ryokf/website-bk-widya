<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function loginPage()
    {
        return Inertia::render('auth/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->is_admin) {
                return redirect()->route('counseling.index');
            }

            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function registerPage(Request $request)
    {
        return Inertia::render('auth/register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => [''],
            'email' => [''],
            'is_male' => [''],
            'password' => [''],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'is_male' => $request->isMale,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('home');
    }
}
