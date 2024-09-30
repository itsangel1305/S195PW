<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @Vite('resources/js/app.js')
    <title>Inicio</title>
    


<body>
    <div style="display: flex; justify-content:center; align-items:center; height: 100vh; text-align:center;">
    <div>
        <h1 class="display-1"> Bienvenido Turista! </h1>
        <p>Presiona el botón para iniciar....</p>
        <a href="{{ route('rutaformulario') }}" class="btn btn-primary"> Ir al Registro </a> 
        {{-- <a href="/formulario" class="btn btn-danger"> Ir al Registro </a> --}}
    </div>
    </div>
</body>

</html>
</head>