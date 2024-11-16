@extends('layouts.plantilla1')
@section('titulo','Clientes')
@section('contenido')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 88vh;"
    @foreach($consultaClientes as $cliente)

    <class="card w-50 shadow">
    <div class="card-header">
        {{$cliente->nombre}}
    </div>
    <div class="card-body">
        <h5 class="fw-bold">{{$cliente->correo}}</h5>
        <h5 class="fw-bold">{{$cliente->telefono}}</h5>
        <p class="card-text fw-lighter"> </p>
    </div>
    <div class="card-footer text.muted d-flex justify-content-between">
        <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
        <button type="submit" class="btn btn-warning btn-sm">Eliminar</button>
    </div>
</div>
@endforeach

</div>

@endsection