<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('pages.auth.login');
//});

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
