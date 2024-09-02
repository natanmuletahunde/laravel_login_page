<?php

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'storeLoginData']);
