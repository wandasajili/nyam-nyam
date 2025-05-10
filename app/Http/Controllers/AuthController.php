<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registration()
    {
        // Jika user sudah login, redirect ke admin
        if (Auth::check()) {
            return redirect('/admin');
        }

        return view('auth.registration');
    }

    public function submitRegistration(Request $request)
    {
      
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:3',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/auth/login')->with('success', 'Registration successful! Please login.');
    }

    public function login()
    {
        // Jika user sudah login, redirect ke admin
        if (Auth::check()) {
            return redirect('/admin');
        }

        return view('auth.login');
    }

    public function submitLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin')->with('success', Auth::user()->name . 'successfully login');
        } else {
            return redirect()->back()->with('failed', 'Your Email or Password is wrong');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
