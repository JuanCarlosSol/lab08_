<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <div class="card">
            <div class="card-header bg-dark text-white text-center">
                <h1 class="display-5 fw-bold">AGREGAR PRODUCTO</h1>
            </div>
            <div class="card-body">
                <form action="Buscador.php" method="get">
                    <div class="d-grid gap-2 mb-3">
                        <input class="btn btn-primary btn-lg" name="Buscar" type="submit" value="Buscar">
                    </div>
                </form>
                <form action="listado.php" method="get">
                    <div class="d-grid gap-2 mb-3">
                        <input class="btn btn-primary btn-lg" name="listado" type="submit" value="Lista de Productos">
                    </div>
                </form>
                <form action="crearproducto.php" method="get">
                    <div class="d-grid gap-2">
                        <input class="btn btn-success btn-lg" name="crear" type="submit" value="Crear Nuevo Producto">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
