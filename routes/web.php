<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

//site
Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);

//login
Route::get('/login', [LoginController::class, 'index']);