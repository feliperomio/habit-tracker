<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;

//site
Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);

//login-get
Route::get('/login', [LoginController::class, 'index']);

//login-post
Route::post('/login', [LoginController::class, 'authenticate']);



//auth usuario logado
Route::middleware('auth')->group(function () {
    //dashboard
    Route::get('/dashboard',[SiteController::class, 'dashboard']);
        //logout
        Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth'); //adiciona o middleware 'auth' para proteger a rota de logout, garantindo que apenas usuários autenticados possam acessá-la.
});


