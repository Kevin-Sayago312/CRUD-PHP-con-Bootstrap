<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
    
    <main class="container">
        <div class="row">
            <div class="col-md-8 offset-md-4">
                <div class="card" style="width: 18rem;">
                    <h5 class="card-header"> Datos del productos</h5>
                    <div class="card-body">

                        <form action="store.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">
                                    Nombre
                                </label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">
                                    Descripcion
                                </label>
                                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">
                                    Precio
                                </label>
                                <input type="number" class="form-control" id="precio" name="precio" required>
                            </div>
                            <div class="mb-3">
                                <label for="existencia" class="form-label">
                                    Existencia
                                </label>
                                <input type="number" class="form-control" id="existencia" name="existencia" required>
                            </div>
                            <div class="mb-3">
                                <label for="existencia" class="form-label">
                                    Foto
                                </label>
                                <input type="file" class="form-control" id="img" name="img">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>