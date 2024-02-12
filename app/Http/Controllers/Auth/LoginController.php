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

    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {
            if (Auth::user()->role == 1) {
                dd('Redirecting to admin');
                return redirect()->route('admin');
            } else {
                dd('Redirecting to dashboard');
                return redirect()->route('dashboard');
            }

            //dd('ok');
            session()->regenerate();
 
            //return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.',])->onlyInput('email');
        }
    }
}