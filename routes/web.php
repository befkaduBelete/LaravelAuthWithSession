<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';


Route::get('/get-session',[sessionController::class,'getSession']);
Route::get('/store-session',[sessionController::class,'storeSession']);
Route::get('/delete-session',[sessionController::class,'deleteSession']);
