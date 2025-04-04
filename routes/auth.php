<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;

Route::controller(CustomAuthController::class)->group(
    function(){
        Route::get('/login', 'login')->middleware('AlreadyLoginCheck')->name('login');
        Route::get('/register','register')->name('registration');
        Route::post('/register-user','registerUser')->name('register.user');
        Route::post('/login-user','loginUser')->name('login.user');
        Route::get('/dashboard','dashboard')->middleware('AuthCheck')->name('dashboard');
        Route::get('/logout','logout')->name('logout');
    }
);

