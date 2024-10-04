<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login', function () {
    return view('auth.login'); 
})->name('login');

// Handle login
Route::post('/login', [AuthController::class, 'login'])->name('login');