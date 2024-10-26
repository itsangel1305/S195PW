<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

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

    public function procesarCliente(validadorCliente $peticion)
    {

        
        //redirección con mensaje en sesión

        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario:  '.$usuario);


        return to_route('rutaformulario');
        
      //return redirect('/');


      //return redirect()->route('rutaclientes');

      //return back();

      //$id= [['usuario'=>1],['usurio'=>2]];

      //return view('formulario',compact('id'));



    }


  
}
