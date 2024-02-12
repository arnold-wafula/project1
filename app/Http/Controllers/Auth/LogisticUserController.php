<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogisticUserController extends Controller
{
    public function __construct() {
        $this->middleware('logistic-user');
    }
}
