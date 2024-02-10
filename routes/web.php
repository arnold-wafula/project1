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
    //return view('auth.login');

    return "This is the home page";
});

// Admin route
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'create']);