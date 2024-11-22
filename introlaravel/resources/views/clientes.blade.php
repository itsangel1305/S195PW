@extends('layouts.plantilla1')

@section('contenido2')
@section('titulo', 'Clientes')

<div class="container mt-5 col-md-8">
    @if (session('exito'))
    <div class="alert alert-success">
        {{ session('exito') }}
    </div>
    @endif

    @foreach ($consultaClientes as $cliente)
    <div class="card-text-justify font-monospace mt-3">
        <div class="card-header fs-5 text-primary">
            {{$cliente->nombre}}
        </div>
        <div class="card-body">
            <h5 class="fw-bold">{{$cliente->correo}}</h5>
            <h5 class="fw-medium">{{$cliente->telefono}}</h5>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between">
            
            <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Actualizar</a>

            
            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
