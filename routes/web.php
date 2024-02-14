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
    return view('auth.login');
});

// Auh::routes();
Auth::routes();
// Admin
Route::middleware(['admin'])->group(function(){
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/dashboard', [DashboardController::class, 'admin.dashboard']);
});
// Route::post('/admin', [AdminController::class, 'create']);

// Route::get('/admin', [AdminController::class, 'index'])->name('admin');
// Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');




// Route::get('/logistic/dashboard', [DashboardController::class, 'logistic.dashboard']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
