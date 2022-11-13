<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route index register
Route::get('/register', [RegisterController::class, 'index']);

//route store register
Route::post('/register', [RegisterController::class, 'store']);

//route index login
Route::get('/login', [LoginController::class, 'index']);

//route store login
Route::post('/login', [LoginController::class, 'store']);

//route logout
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

//route dashboard
Route::get('/dashboard', DashboardController::class)->middleware('auth');

//route post
Route::resource('/posts', PostController::class)->middleware('auth');