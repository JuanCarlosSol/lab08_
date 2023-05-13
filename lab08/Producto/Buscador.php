<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-hhSuhovSwbjZQ8ulQlS/h/8RO7zlt/w5KLVXVTcqBZyXj9ObRcTnsdw+9N2Xq9k3v8vn6tEGx07BbcJDrZ/rLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="index.php" method="get">
        <input class="btn btn-primary" name="pagina_principal" type="submit" value="Pagina Principal">
    </form>
    <form action="listado.php" method="get">
        <input class="btn btn-primary" name="pagina_principal" type="submit" value="Lista de Productos">
    </form>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Búsqueda de Productos</h1>

        <form action="" method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-8">
                    <input type="text" name="busqueda" class="form-control" placeholder="Buscar productos">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary w-100">Buscar</button>
                </div>
            </div>
        </form>

        <?php
        // Conexión a la base de datos
        $conn = mysqli_connect("localhost", "root", "", "Eval02");

        // Verificar la conexión
        if (!$conn) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        // Procesar el formulario de búsqueda
        if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];

            // Consulta SQL para buscar coincidencias en la base de datos
            $query = "SELECT * FROM Producto WHERE nombre LIKE '%$busqueda%' OR Descripcion LIKE '%$busqueda%'";
            $result = mysqli_query($conn, $query);

            // Mostrar los resultados de la búsqueda
            if (mysqli_num_rows($result) > 0) {
                echo "<h2>Resultados de la búsqueda:</h2>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='card my-3'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . $row['Nombre'] . "</h5>";
                    echo "<p class='card-text'>" . $row['Descripcion'] . "</p>";
                    echo "<ul class='list-group list-group-flush'>";
                    echo "<li class='list-group-item'>Stock: " . $row['Stock'] . "</li>";
                    echo "<li class='list-group-item'>Precio de venta: $" . $row['PrecioVenta'] . "</li>";
                    echo "</ul>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No se encontraron resultados.</p>";
            }
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
