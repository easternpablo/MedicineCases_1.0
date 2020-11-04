<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
// Ruta Inicio
Route::get('/', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');
// Ruta Quiénes Somos
Route::get('/quienes-somos', [App\Http\Controllers\AboutUsController::class, 'index']);
// Ruta Contacto
Route::get('/contacto', [App\Http\Controllers\ContactController::class, 'index']);
// Login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    // Rutas Entradas
    Route::get('/entrada/nueva', [App\Http\Controllers\NotesController::class, 'create'])->name('crearEntrada');
    Route::post('/entrada/nueva/submit', [App\Http\Controllers\NotesController::class, 'save'])->name('guardarEntrada');
    Route::get('/entrada/editar/{id}', [App\Http\Controllers\NotesController::class, 'edit'])->name('editarEntrada')->where('id','[0-9]+');
    Route::post('/entrada/editar/submit/{id}', [App\Http\Controllers\NotesController::class, 'saveEdit'])->name('updateEntrada')->where('id','[0-9]+');
    Route::get('/entrada/inicio/delete/{id}', [App\Http\Controllers\NotesController::class, 'delete'])->where('id','[0-9]+');
    // Rutas Categorías
    Route::get('/categoria/nueva', [App\Http\Controllers\TypeController::class, 'create'])->name('crearCategoria');
    Route::post('/categoria/nueva/submit', [App\Http\Controllers\TypeController::class, 'save'])->name('guardarCategoria');
    Route::post('/categoria/filtro/submit/{id}', [App\Http\Controllers\TypeController::class, 'edit'])->name('updateCategoria')->where('id','[0-9]+');
    Route::get('/categoria/filtro/delete/{id}', [App\Http\Controllers\TypeController::class, 'delete'])->name('borrarCategoria')->where('id','[0-9]+');
});
// Ruta Entrada
Route::get('/entrada/detalle/{id}', [App\Http\Controllers\NotesController::class, 'idDetalle'])->where('id','[0-9]+');
Route::get('/entrada/{filename}', [App\Http\Controllers\NotesController::class, 'getImage']);
Route::get('/entrada/pdf/{pdf}', [App\Http\Controllers\NotesController::class, 'download']);
// Ruta Categoría
Route::get('/categoria/filtro/{id}', [App\Http\Controllers\TypeController::class, 'idType'])->where('id','[0-9]+');
