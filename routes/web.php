<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
Route::get('/profil', [PageController::class, 'profile'])->name('profile');
