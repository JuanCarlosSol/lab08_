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
    <div class="container py-3">
        <div class="row">
            <div class="col-md-3">
                <form action="index.php" method="get">
                    <button class="btn btn-primary w-100" type="submit" name="pagina_principal">Pagina Principal</button>
                </form>
            </div>
            <div class="col-md-3">
                <form action="crearproducto.php" method="get">
                    <button class="btn btn-success w-100" type="submit" name="crear">Crear Nuevo Producto</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center mb-4">Listas de Producto</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>   
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Precio Venta</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php
                include "ConexionBD.php";

                $conex = Conectar();
                $sql2 = "SELECT * FROM Producto";
                $query2 = mysqli_query($conex, $sql2);


                while ($fila = mysqli_fetch_array($query2)) {
                ?>
                    <tr>
                        <td><?php echo $fila['Nombre'] ?></td>
                        <td><?php echo $fila['Descripcion'] ?></td>
                        <td><?php echo $fila['Stock'] ?></td>
                        <td><?php echo $fila['PrecioVenta'] ?></td>
                        <td>
                            <a class="btn btn-primary" href="Editar_Producto.php?id=<?php echo $fila['Producto_id']?>">Editar</a>
                            <a href="Eliminar_Producto.php?id=<?php echo $fila['Producto_id']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                Desconectar($conex);
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
