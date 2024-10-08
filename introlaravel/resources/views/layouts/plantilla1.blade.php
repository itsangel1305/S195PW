<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    {{-- Iniciar navbar --}}
    <nav class="navbar navbar-expend-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutainicio') }}">  </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('rutaformulario') }}">registro de clientes</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaclientes')}}">Consulta clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{--finaliza navbar--}}


    @yield('contenido')
    @yield('contenido3')
    





</body>

</html>