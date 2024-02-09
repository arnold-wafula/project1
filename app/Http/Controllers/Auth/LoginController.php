<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function login() {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login() {
        return view('auth.login');
    }

    public function create() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            // Regenerate session after log in confirmed
            session()->regenerate();

            // Successfully logged in
            session()->flash('success', 'Successfully logged in');

            return redirect()->route('dashboard');
        }

        // Error message for email
        session()->flash('error', 'Invalid email');

        return back()->withInput(['email']);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->withSuccess('Logged out successfully');
    }
}