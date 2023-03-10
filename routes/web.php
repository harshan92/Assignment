<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;



    Route::get('/', [HomeController::class, 'index'])->middleware('auth.guest');
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('auth.guest');
    Route::post('/login_process', [LoginController::class, 'login']);
    Route::get('/register', [RegistrationController::class, 'index'])->middleware('auth.guest');
    Route::post('/register_process', [RegistrationController::class, 'register']);


Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout']);
});
