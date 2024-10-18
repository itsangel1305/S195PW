<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorCrud extends Controller
{
    
    public function index()
    {
        return view('convertidor');
    }

   
    public function convertir(Request $request)
    {
        

        $tipo = $request->input('tipo');
        $cantidad = $request->input('cantidad');
        $resultado = '';

        
        switch ($tipo) {
            case 'mb_to_gb':
                $resultado = $cantidad . ' MB son ' . ($cantidad / 1024) . ' GB';
                break;
            case 'gb_to_mb':
                $resultado = $cantidad . ' GB son ' . ($cantidad * 1024) . ' MB';
                break;
            case 'gb_to_tb':
                $resultado = $cantidad . ' GB son ' . ($cantidad / 1024) . ' TB';
                break;
            case 'tb_to_gb':
                $resultado = $cantidad . ' TB son ' . ($cantidad * 1024) . ' GB';
                break;
            default:
                $resultado = 'Selecciona una opción válida.';
                break;
        }

    return view('repaso1', ['resultado' => $resultado]);
    }
}
