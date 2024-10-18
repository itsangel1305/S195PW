<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorCrud;    


Route::get('/',[controladorVistas::class,'inicio'])->name('rutainicio');
Route::get('/repaso1/get',[controladorVistas::class,'repaso1'])->name('rutarepasoget');
Route::post('/repaso1',[controladorCrud::class,'convertir'])->name('rutarepaso1');