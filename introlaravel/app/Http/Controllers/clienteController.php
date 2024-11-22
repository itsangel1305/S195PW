<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class clienteController extends Controller
{
    /**
     * Muestra la consultas
     */
    public function home()
    {
        return view('inicio');
    }

    public function index()
    {
        $consultaClientes = DB::table('clientes')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Para abrir el formulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * La usamos para ejecutar el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardó el usuario: ' . $usuario);

        return to_route('rutaformulario');
    }

    
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();
        return view('editarcliente', compact('cliente')); // Cambiado a "editarcliente"
    }
    
    public function update(validadorCliente $request, string $id)
    {
        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('rutaclientes')->with('exito', 'Cliente actualizado correctamente.');
    }

   
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();

        return redirect()->route('rutaclientes')->with('exito', 'Cliente eliminado correctamente.');
    }
}
