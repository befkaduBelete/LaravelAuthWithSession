<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

Route::controller(CustomAuthController::class)->group(
    function(){
        Route::get('/login', 'login');
        Route::get('/register','register');
        Route::post('/register-user','registerUser')->name('register.user');
        Route::post('/login-user','loginUser')->name('login.user');
        Route::get('/dashboard','dashboard')->name('dashboard');
    }
);

