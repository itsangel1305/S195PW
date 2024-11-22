@extends('layouts.plantilla1')

@section('titulo', 'Editar Cliente')

@section('contenido1')
<div class="container mt-5 col-6">

    @if (session('exito'))
    <x-Alert tipo="success"> {{ session('exito') }}</x-Alert>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            Editar Cliente
        </div>

        <div class="card-body text-justify">
            
            <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT') 
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre', $cliente->nombre) }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido', $cliente->apellido) }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="txtcorreo" value="{{ old('txtcorreo', $cliente->correo) }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono', $cliente->telefono) }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                </div>

        </div>

        <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-primary btn-sm">Actualizar Cliente</button>
                <a href="{{ route('rutaclientes') }}" class="btn btn-secondary btn-sm">Cancelar</a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
