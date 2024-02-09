<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\Departments;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {
        $countries = Countries::all();
        $departments = Departments::all();
        //dd($countries);
        return view('admin', compact('countries', 'departments'));
    }

}