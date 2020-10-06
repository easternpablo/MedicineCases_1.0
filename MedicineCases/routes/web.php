<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Login
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    // Ruta Inicio
    Route::get('/', [App\Http\Controllers\InicioController::class, 'index']);
    // Rutas Entradas
    Route::get('/entrada/nueva-entrada', [App\Http\Controllers\NotesController::class, 'create']);
    Route::post('/entrada/nueva-entrada/submit', [App\Http\Controllers\NotesController::class, 'save']);
    Route::get('/entrada/{filename}', [App\Http\Controllers\NotesController::class, 'getImage']);
    Route::get('/entrada/{pdf}', [App\Http\Controllers\NotesController::class, 'getPdf']);
    Route::get('/entrada/detalle/{id}', [App\Http\Controllers\NotesController::class, 'idDetalle'])->where('id','[0-9]+');
    // Rutas Categorías
    Route::get('/categoria/nueva-categoria', [App\Http\Controllers\TypeController::class, 'create']);
    Route::post('/categoria/nueva-categoria/submit', [App\Http\Controllers\TypeController::class, 'save']);
    // Ruta Quiénes Somos
    Route::get('/quienes-somos', [App\Http\Controllers\AboutUsController::class, 'index']);
});
