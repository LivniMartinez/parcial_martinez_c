<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Examne_parcial</title>
    <style>
    body {
    text-align: justify;
    color: black;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; 
    font-size: 1.1rem;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Formulario de registro de insumos de la Oficina de Logistica</h1>
        <div class="row justify-content-center">
            <form action="/parcial_martinez_c/controladores/insumos/guardar.php" method = "POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_nombres">Nombre del insumo</label>
                        <input type="text" name="insu_nombre" id="insu_nombre" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insu_cantidad">Cantidad en existencia</label>
                        <input type="number" name="insu_cantidad" id="insu_cantidad" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col">
                        <label for="insu_marca">Marca del producto</label>
                        <input type="text" name="insu_marca" id="insu_marca" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insu_proveedor">Proveedor de Insumo</label>
                        <input type="text" name="insu_proveedor" id="insu_proveedor" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insu_precio">Precio Insumo</label>
                        <input type="number" name="insu_precio" id="insu_precio" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Guardar insumo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="bg-dark text-white text-center p-2">
    <p> Comando de Informática y Tecnología, Ofincina de Logistica.</p>
  </footer>
</body>
</html>