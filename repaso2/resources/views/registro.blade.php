@extends('layouts.plantilla')

@section('titulo', 'Registro de Libro')
@section('contenido')
<div class="container mt-5 col-6">
    @if(session('exito'))
        <script>
            alertify.success("{{ session('exito') }}");
        </script>
    @endif

    <div class="card">
        <div class="card-header text-center">
            Registro de Libro
        </div>
        <div class="card-body">
            <form action="{{ route('guardarLibro') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="isbn" required>
                    <small class="text-danger">{{ $errors->first('isbn') }}</small>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" required>
                    <small class="text-danger">{{ $errors->first('titulo') }}</small>
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="autor" required>
                </div>
                <div class="mb-3">
                    <label for="paginas" class="form-label">Páginas</label>
                    <input type="number" class="form-control" name="paginas" required>
                    <small class="text-danger">{{ $errors->first('paginas') }}</small>
                </div>
                <div class="mb-3">
                    <label for="año" class="form-label">Año</label>
                    <input type="number" class="form-control" name="año" required>
                    <small class="text-danger">{{ $errors->first('año') }}</small>
                </div>
                <div class="mb-3">
                    <label for="editorial" class="form-label">Editorial</label>
                    <input type="text" class="form-control" name="editorial" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email de Editorial</label>
                    <input type="email" class="form-control" name="email" required>
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Libro</button>
            </form>
        </div>
    </div>
</div>
@endsection


