@extends('layouts.plantilla1')
@section('titulo','Clientes')
@section('contenido')
{{-- Inicia navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('rutainicio') }}">Turista sin Maps</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('rutaformulario') }}">Registro Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Consulta Clientes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- Finaliza navbar --}}

{{-- Inicia tarjeta Cliente --}}
<div class="container mt-5 col-md-8">
    <div class="card text-justify font-monospace">
        <div class="card-header fs-5 text-primary">Angel Daniel</div>
        <div class="card-body">
            <h5 class="fw-bold">angel.dani@gmail.com</h5>
            <h5 class="fw-medium">441383836</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </div>
    </div>
</div>
{{-- Finaliza tarjeta Cliente --}}
@endsection