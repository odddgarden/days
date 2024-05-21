<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromptController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

Route::get('/', function () {
    return view('welcome');
});

//Auth
Route::post('/register', [RegisterUserController::class, 'store']);

Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

//Profile
Route::get('/profile', [SessionController::class, 'index']);

Route::post('/upload', [SessionController::class, 'upload']);

//Prompt



