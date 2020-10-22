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
    Route::get('/entrada/editar-entrada/{id}', [App\Http\Controllers\NotesController::class, 'edit'])->where('id','[0-9]+');
    Route::post('/entrada/nueva-entrada/submit', [App\Http\Controllers\NotesController::class, 'save']);
    Route::post('/entrada/editar-entrada/submit/{id}', [App\Http\Controllers\NotesController::class, 'saveEdit'])->where('id','[0-9]+');
    Route::get('/entrada/inicio/delete/{id}', [App\Http\Controllers\NotesController::class, 'delete'])->where('id','[0-9]+');
    Route::get('/entrada/{filename}', [App\Http\Controllers\NotesController::class, 'getImage']);
    Route::get('/entrada/detalle/{id}', [App\Http\Controllers\NotesController::class, 'idDetalle'])->where('id','[0-9]+');
    // Rutas Categorías
    Route::get('/categoria/nueva-categoria', [App\Http\Controllers\TypeController::class, 'create']);
    Route::post('/categoria/nueva-categoria/submit', [App\Http\Controllers\TypeController::class, 'save']);
    Route::get('/categoria/filtro/{id}', [App\Http\Controllers\TypeController::class, 'idType'])->where('id','[0-9]+');
    Route::post('/categoria/filtro/submit/{id}', [App\Http\Controllers\TypeController::class, 'edit'])->where('id','[0-9]+');
    Route::get('/categoria/filtro/delete/{id}', [App\Http\Controllers\TypeController::class, 'delete'])->where('id','[0-9]+');
    // Ruta Quiénes Somos
    Route::get('/quienes-somos', [App\Http\Controllers\AboutUsController::class, 'index']);
    // Ruta Contacto
    Route::get('/contacto', [App\Http\Controllers\ContactController::class, 'index']);
});
