<?php
require("conexion.php");
$consulta = "SELECT * FROM productos";
$resultados = $conexion->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
    <?php
    if ($resultados->num_rows > 0) {

        echo "<table class='table table-dark table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>id</th>";
        echo "<th scope='col'>Nombre</th>";
        echo "<th scope='col'>Descripcion</th>";
        echo "<th scope='col'>Precio</th>";
        echo "<th scope='col'>Existencia</th>";
        echo "<th scope='col'>Img</th>";
        echo "<th scope='col'>Más información</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = $resultados->fetch_assoc()) {
            $id = $row['id'];
            echo "<tr>";
            echo "<th scope='row'>" . $row['id'] . "</th>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo "<td>" . $row['precio'] . "</td>";
            echo "<td>" . $row['existencia'] . "</td>";
            echo "<td>" . $row['img'] . "</td>";
            echo '<td> ' . ' <a class = "btn btn-info btn-sm" href = "mostrar.php?id=' . $id . '"> Mostrar más </a> ' . '</td>';
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        echo "<div class= 'd-grid gap-2 d-md-flex justify-content-md-end'>";
        echo "<a type='button' class='btn btn-primary' href = 'crear.php' > Agregar </a>";
        echo "<button type='button' class='btn btn-secondary btn-danger'>Eliminar</button>";
        echo "</div>";

    } else {
        echo "<p> No hay datos </p>";
    }
    $conexion->close();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>