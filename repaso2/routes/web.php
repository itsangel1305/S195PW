<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

// Ruta para la vista principal de la biblioteca
Route::get('/', [LibroController::class, 'inicio'])->name('inicio');

// Ruta para la vista de registro de libro
Route::get('/registro', [LibroController::class, 'mostrarFormulario'])->name('registro');

// Ruta para procesar el guardado del libro
Route::post('/guardar-libro', [LibroController::class, 'almacenar'])->name('guardarLibro');
