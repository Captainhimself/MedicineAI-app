<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Login
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Dashboards
Route::middleware('auth')->group(function () {

    Route::get('/admin/Dashboard', function () {
        return view('admin.Dashboard');
    })->name('admin.Dashboard');

    Route::get('/pharmacist/Dashboard', function () {
        return view('admin.Pharmacist.Dashboard');
    })->name('pharmacist.Dashboard');

    Route::get('/cashier/Dashboard', function () {
        return view('admin.cashier.Dashboard');
    })->name('cashier.Dashboard');

});

Route::get('/admin/Dashboard', [AdminDashboardController::class, 'index'])
    ->middleware('auth')
    ->name('admin.Dashboard');

Route::get('/admin/user', function () {
    return view('admin.user');
})->name('User management');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


