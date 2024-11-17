<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

use App\Http\Controllers\UserController;

Route::get('/register', [UserController::class, 'showRegisterForm'])->name('registerForm');

Route::post('/register', [UserController::class, 'register'])->name('register');
