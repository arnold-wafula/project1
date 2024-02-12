<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Departments;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {
        $countries = Countries::all();
        $departments = Departments::all();
        $roles = Roles::all();
        //dd($countries);
        return view('admin', compact('countries', 'departments', 'roles'));
    }

    public function create() {
        $user = new User();

        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->country = request('country');
        $user->department = request('department');
        $user->role = request('role');
        $user->password = request('password');

        $saved = $user->save();

        return view('login');
    }

    public function dashboard() {
        return view('dashboard');
    }
}