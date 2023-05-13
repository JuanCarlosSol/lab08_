<?php
// Conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "", "Eval02");

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener el ID del producto a editar
$id = $_GET['id'];

// Obtener los datos actuales del producto
$query = "SELECT * FROM Producto WHERE Producto_id = $id";
$resultado = mysqli_query($conn, $query);
$Producto = mysqli_fetch_assoc($resultado);

// Comprobar si se envió el formulario de edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los nuevos datos del formulario
    $Nombre = $_POST['Nombre'];
    $Descripcion = $_POST['Descripcion'];
    $Stock = $_POST['Stock'];
    $PrecioVenta = $_POST['PrecioVenta'];

    // Actualizar los datos del producto en la base de datos
    $query = "UPDATE Producto SET Nombre = '$Nombre', Descripcion = '$Descripcion', Stock = $Stock, PrecioVenta = $PrecioVenta WHERE Producto_id = $id";
    if (mysqli_query($conn, $query)) {
        echo "Producto actualizado correctamente";
        // Redireccionar a la página de lista de productos o mostrar un mensaje de éxito
    } else {
        echo "Error al actualizar el producto: " . mysqli_error($conn);
    }
    if ($query){
        header("location: listado.php");
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Producto</h1>
        <form method="POST">
            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" class="form-control" name="Nombre" value="<?php echo $Producto['Nombre']; ?>">
            </div>

            <div class="form-group">
                <label for="Descripcion">Descripción:</label>
                <input type="text" class="form-control" name="Descripcion" value="<?php echo $Producto['Descripcion']; ?>">
            </div>

            <div class="form-group">
                <label for="Stock">Stock:</label>
                <input type="number" class="form-control" name="Stock" value="<?php echo $Producto['Stock']; ?>">
            </div>

            <div class="form-group">
                <label for="PrecioVenta">Precio de Venta:</label>
                <input type="number" class="form-control" step="0.01" name="PrecioVenta" value="<?php echo $Producto['PrecioVenta']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <a href="listado.php">Volver atrás</a>
</body>
</html>