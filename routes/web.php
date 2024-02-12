<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// Admin route
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'create']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/login', function() {
    return "This is the login page";
});

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('role:admin');