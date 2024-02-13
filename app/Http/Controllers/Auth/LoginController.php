<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Only guests should access the login page

    /*public function redirectTo() {
        switch(Auth::user->role){

            case 1:
                $this->redirectTo('admin');
                return $this->redirectTo;
            case 2:
                $this->redirectTo('dashboard');
                return $this->redirectTo;
            default:
            $this->redirectTo('login');
        }
    }*/

    /*public function __construct() {
        $this->middleware('guest')->except('logout');
    }*/

    // Displays the login page
    public function index() {
        return view('login');
    }

    // Attempts to log the user in
    public function login(Request $request) {

       
        $credentials = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);
        dd('ok');

   

        if(Auth::attempt($credentials)) {
            // Debug: Check if authentication is successful
            dd(Auth::user());

            switch (Auth::user()->role) {
                case 1:
                    dd('Redirected to admin');
                    return redirect()->route('admin');
                case 2:
                    dd('Redirected to dashboard');
                    return redirect()->route('dashboard');
                default:
                    return redirect()->route('login');
            }
        }

        session()->regenerate();
        return back()->withErrors(['email' => 'The provided credentials do not match our records.',])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->withSuccess('Logged out successfully');
    }
}