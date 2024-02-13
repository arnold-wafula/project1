<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\LoginController;

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

Auh::routes();

// Admin
Route::middleware(['admin'])->group(function(){
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
// Route::get('/admin/dashboard', [DashboardController::class, 'admin.dashboard']);
});
// Route::post('/admin', [AdminController::class, 'create']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);


// Route::get('/logistic/dashboard', [DashboardController::class, 'logistic.dashboard']);