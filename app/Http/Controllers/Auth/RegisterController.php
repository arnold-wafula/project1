<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }

    public function create() {
        return view('auth.createuser');
    }

    public function store(Request $request) {
        $request->validate([
            'fname' =>'required|string|max:255',
            'lname' =>'required|string|max:255',
            'email' =>'required|string|email|max:255|unique:users',
            'country' =>'required|string',
            'department' =>'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create a new user
        User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'country' => $request->country,
            'department' => $request->department,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->withSuccess('Registered successfully!');
    }
}