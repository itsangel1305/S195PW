<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;



Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');

Route::get('/formulario',[controladorVistas::class,'formulario'])->name('rutaformulario');

Route::get('/clientes',[controladorVistas::class,'consulta'])->name('rutaclientes');


Route::post('/enviar',[controladorVistas::class,'procesarCliente'])->name('procesar');









// Route::get('/', function () {
//     return view('welcome');
// });



// Route::view('/','inicio')->name('rutainicio');
// Route::view('/formulario',view: 'formulario')->name('rutaformulario');
// Route::view('/clientes','clientes')->name('rutaclientes');
 Route::view('/componentes','componentes')->name('rutacomponentes');
