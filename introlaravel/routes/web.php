<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\clienteController;    

/* Rutas de clienteController*/

Route::get('/',[clienteController::class,'home'])->name('rutainicio');

Route::get('/cliente/create',[clienteController::class,'create'])->name('rutaformulario');

Route::post('/cliente',[clienteController::class,'store'])->name('procesar');

Route::get('/cliente',[clienteController::class,'index'])->name('rutaclientes');



Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('cliente.edit');
Route::put('/cliente/{id}', [clienteController::class, 'update'])->name('cliente.update');
Route::delete('/cliente/{id}', [clienteController::class, 'destroy'])->name('cliente.destroy');

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::view('/','inicio')->name('rutainicio');
// Route::view('/formulario',view: 'formulario')->name('rutaformulario');
// Route::view('/clientes','clientes')->name('rutaclientes');
 Route::view('/componentes','componentes')->name('rutacomponentes');
