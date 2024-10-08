@extends('layouts.plantilla1')
@section('titulo','Formulario Clientes')
@section('contenido')




{{-- inicia navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route ('rutainicio') }}"> Turista sin Maps </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Registro Clientes </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rutaclientes') }}">Consulta Clientes </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- finaliza navbar --}}



{{--inicia targeta con formulario --}}
<div class="container mt-5 col-md-6">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary"> Registro de Clientes
        </div>
        <div class="card-body text-justify">
            <form>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label> <input type="text" class="form-control" id="nombre">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Apellido: </label> <input type="text" class="form-control" id="apellido">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo: </label> <input type="email" class="form-control" id="correo">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono: </label> <input type="number" class="form-control" id="telefono">
        </div>
        <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm"> Guardar Cliente </button>
            </div>
            </form>
        </div>
    </div>
</div> {{-- divcontainer --}}
|{{-- Finaliza Tarjeta con formulario --}}
@endsection