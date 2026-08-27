<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\RegisterController;

//site
Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('site.index');

//login-get
Route::get('/login', [LoginController::class, 'index'])->name('site.login');

//login-post
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
Route::get('/cadastro', [RegisterController::class, 'index'])->name('site.register');
Route::post('/cadastro', [RegisterController::class, 'store'])->name('auth.register'); //é utilizado store, pois irá salvar os dados do usuário no banco de dados


//auth usuario logado
Route::middleware('auth')->group(function () {
    //dashboard
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');
    //logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout'); //adiciona o middleware 'auth' para proteger a rota de logout, garantindo que apenas usuários autenticados possam acessá-la.
});
