<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-12 mt-5 mx-auto">
                <div class="card">
                    <form action="index.php" method="get">
                        <input class="btn btn-primary" name="pagina_principal" type="submit" value="Pagina Principal">
                    </form>
                    <form action="listado.php" method="get">
                        <input class="btn btn-primary" name="pagina_principal" type="submit" value="Lista de Productos">
                    </form>
                    <div class="card-header bg-secondary">
                        <div class="card-tittle text-white">Crear Producto</div>
                    </div>
                    <div class="card-body">
                    <form action="Agregar_Producto.php" method="post">
                        <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input
                            type="text"
                            name="Nombre"
                            id="nombre"
                            class="form-control"
                            aria-describedby="nombreHelp"
                            required
                        />
                        <div id="nombreHelp" class="form-text">
                            Ingrese el nombre del producto.
                        </div>
                        </div>
                        <div class="mb-3">
                        <label for="Descripcion" class="form-label">Descripción</label>
                        <input
                            type="text"
                            name="Descripcion"
                            id="descripcion"
                            class="form-control"
                            aria-describedby="descripcionHelp"
                            required
                        />
                        <div id="descripcionHelp" class="form-text">
                            Ingrese la descripcion del producto.
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-sm-6">
                            <label for="Stock" class="form-label">Stock</label>
                            <input
                            type="text"
                            name="Stock"
                            id="stock"
                            class="form-control"
                            aria-describedby="stockHelp"
                            required
                            />
                            <div id="stockHelp" class="form-text">
                            Ingrese la cantidad de stock del producto.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="PrecioVenta" class="form-label">Precio de Venta</label>
                            <input
                            type="text"
                            name="PrecioVenta"
                            id="precioventa"
                            class="form-control"
                            aria-describedby="precioventaHelp"
                            required
                            />
                            <div id="precioventaHelp" class="form-text">
                            Ingrese el precio de venta del producto.
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary d-grid gap-2 col-4 mx-auto" name="Agregar" type="submit" value="Agregar">
                            <input type="reset" class="btn d-grid gap-2 col-4 mx-auto btn-danger mt-6 " value="Limpiar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</body>
</html>

