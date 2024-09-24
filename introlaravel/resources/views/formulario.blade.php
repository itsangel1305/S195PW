<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    <title>Formulario</title>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Turista de maps</a>
            </div>

            <div class="container-fluid">
                <a class="navbar-brand" href="#">Registro de clientes</a>
            </div>

            <div class="container-fluid">
                <a class="navbar-brand" href="#">Consultar clientes</a>
            </div>
        </nav>
    </div>

    {{-- Formulario --}}
    <div class="card text-center">

        <div class="card-header">
            Registro de clientes
        </div>
        <div class="card-body">
            <form action="">

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="texto" class="form-control" id="">
                </div>

                <div class="mb-3">
                    <label for="Apellido" class="form-label">Apellido</label>
                    <input type="texto" class="form-control" id="">
                </div>

                <div class="mb-3">
                    <label for="Correo" class="form-label">Correo</label>
                    <input type="texto" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="mb-3">
                    <label for="Telefono" class="form-label">Teléfono</label>
                    <input type="texto" class="form-control" id="exampleFormControlInput1">
                </div>




        </div>
        <div class="card-footer text-body-secondary">

            <button type="submiy" class="btn btn-success">Oh ese es mi negro</button>
            </form>
        </div>
    </div>

</body>

</html>