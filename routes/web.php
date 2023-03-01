<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'index']);
Route::get('/login', [LoginController::class,'index']);
Route::get('/register', [RegistrationController::class,'index']);
