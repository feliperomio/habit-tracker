<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

//site
Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);

//login-get
Route::get('/login', [LoginController::class, 'index']);

//login-post
Route::post('/login', [LoginController::class, 'authenticate']);