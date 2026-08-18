<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', [App\Http\Controllers\SiteController::class, 'index']);