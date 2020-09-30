<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

// Login
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'index']);
    Route::get('/apuntes', [App\Http\Controllers\NotesController::class, 'index']);
    Route::get('/quienes-somos', [App\Http\Controllers\AboutUsController::class, 'index']);
});
