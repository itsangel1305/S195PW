<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');

    }

    public function formulario()
    {
        return view('formulario');

    }

    public function consulta()
    {
        return view('clientes');

    }

    public function procesarCliente(Request $peticion)
    {
        //return 'Llego tu formulario al controlador';

        //Imprimimos todo lo que viene en la petición
        //return $peticion ->all();


        //devuelve la ruta de la petición
       // return $peticion ->path();


       // imprime la url completa de la petición
       //return $peticion ->url();

       //Muestra la ip origen de la petición
      return $peticion ->ip();



    }


  
}
