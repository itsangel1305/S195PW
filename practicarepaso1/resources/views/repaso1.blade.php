<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Unidades</title>
    
    @vite('resources/js/app.js')
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center">Convertidor de Unidades</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rutarepaso1') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Convertir</label>
                                <select name="tipo" id="tipo" class="form-select" required>
                                    <option value="mb_to_gb">MB a GB</option>
                                    <option value="gb_to_mb">GB a MB</option>
                                    <option value="gb_to_tb">GB a TB</option>
                                    <option value="tb_to_gb">TB a GB</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Convertir</button>
                            </div>
                        </form>

                        @if(isset($resultado))
                        <div class="mt-3">
                            <label for="resultado" class="form-label">Resultado</label>
                            <input type="text" id="resultado" class="form-control" value="{{ $resultado }}" readonly>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    @vite('resources/js/app.js')
    

</body>

</html>