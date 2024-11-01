@extends('layouts.plantilla')

@section('titulo', 'Registro de Libro')

@section('contenido')
<div class="container mt-5 col-6">
    <h1>Registrar Libro</h1>

    @if (session('exito'))
        <script>
            alertify.success("{{ session('exito') }}");
        </script>
    @endif

    <form action="{{ route('guardarLibro') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" required>
            <small class="text-danger">@error('isbn') {{ $message }} @enderror</small>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" required>
            <small class="text-danger">@error('titulo') {{ $message }} @enderror</small>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor" required>
            <small class="text-danger">@error('autor') {{ $message }} @enderror</small>
        </div>
        <div class="mb-3">
            <label for="paginas" class="form-label">Páginas</label>
            <input type="number" class="form-control" name="paginas" required>
            <small class="text-danger">@error('paginas') {{ $message }} @enderror</small>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" class="form-control" name="anio" required>
            <small class="text-danger">@error('anio') {{ $message }} @enderror</small>
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control" name="editorial" required>
            <small class="text-danger">@error('editorial') {{ $message }} @enderror</small>
        </div>
        <div class="mb-3">
            <label for="email_editorial" class="form-label">Email de la Editorial</label>
            <input type="email" class="form-control" name="email_editorial" required>
            <small class="text-danger">@error('email_editorial') {{ $message }} @enderror</small>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
