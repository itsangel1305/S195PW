<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @Vite('resources/js/app.js')
    <title>Inicio</title>
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center;">
        <div>
            <h1 class="display-1">Bienvenido a la primera práctica de repaso</h1>
            <p>Presiona el botón para iniciar....</p>
            <a href="{{ route('rutarepasoget') }}" class="btn btn-primary">adelante c:</a>
            
           
            <div style="margin-top: 50px; text-align: left;">
                <p><strong>Nombre:</strong> Angel Daniel Bringas Godinez</p>
                <p><strong>Escuela:</strong> Universidad Politécnica de Querétaro</p>
                <p><strong>Trabajo:</strong> Repaso 1 Laravel</p>
                <p><strong>Maestro:</strong> Iván Isay Guerra López</p>
                <p><strong>Grupo:</strong> S195</p>
            </div>
        </div>
    </div>
</body>

</html>
