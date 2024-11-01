<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibro;

class LibroController extends Controller
{
    
    public function inicio()
    {
        return view('inicio');
    }

    
    public function mostrarFormulario()
    {
        return view('registro');
    }

    
    public function almacenar(ValidadorLibro $request)
    {
        
        session()->flash('exito', 'Libro "'.$request->input('titulo').'" guardado correctamente');
        
        return redirect()->route('registro');
    }
}
