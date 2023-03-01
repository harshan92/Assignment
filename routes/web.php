<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'index']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/login_process', [LoginController::class,'login']);
Route::get('/register', [RegistrationController::class,'index']);
Route::post('/register_process', [RegistrationController::class,'register']);
Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/logout', [LoginController::class,'logout']);
