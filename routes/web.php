<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogisticController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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
Route::middleware(['admin'])->group(function() { 
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
    
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['logistic'])->group(function() {
    Route::get('/logistic', [LogisticController::class, 'index'])->name('logistic');
});

// Route::post('/admin', [AdminController::class, 'create']);

// Route::get('/admin', [AdminController::class, 'index'])->name('admin');
// Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');


// Route::get('/logistic/dashboard', [DashboardController::class, 'logistic.dashboard']);

Route::get('/home', [HomeController::class, 'index'])->name('home');