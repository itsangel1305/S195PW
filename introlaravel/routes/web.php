<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','inicio')->name('rutainicio');
Route::view('/formulario',view: 'formulario')->name('rutaformulario');
Route::view('/clientes','clientes')->name('rutaclientes');
Route::view('/componentes','componentes')->name('rutacomponentes');
