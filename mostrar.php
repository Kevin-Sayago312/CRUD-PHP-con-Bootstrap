<?php
include('conexion.php');

$id = $_GET['id'];

$query = "SELECT * FROM productos WHERE id=" . $id;
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalle del Producto</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="preload" href="style.css" as="style">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-nav mb-3 text-bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand letter-nav" href="index.php">Productos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="crear.php">Crear producto</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="card mx-auto" style="width: 18rem;">
            <?php
            // Muestra la imagen si la ruta existe
            if (file_exists($fila['img'])) {
                echo '<img src="' . $fila['img'] . '" class="card-img-top" alt="Producto">';
            } else {
                echo '<img src="ruta_de_imagen_predeterminada.jpg" class="card-img-top" alt="Producto">';
            }
            ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $fila['nombre']; ?></h5>
                <p class="card-text"><?php echo $fila['descripcion']; ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ID: <?php echo $fila['id']; ?></li>
                <li class="list-group-item">Precio: <?php echo $fila['precio']; ?></li>
                <li class="list-group-item">Existencia: <?php echo $fila['existencia']; ?></li>
            </ul>
        </div>

    <?php
} else {
    echo "No se encontraron resultados para el ID proporcionado.";
}

$conexion->close();
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

    </html>