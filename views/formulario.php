<?php

$controller = new ProductController();

// $controller->showProducts('prueba');

$productos = $controller->showProducts();
$categorias = $controller->showCategories();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon2.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles2.css" rel="stylesheet" />
    <title>Formulario de Productos</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="mb-4">Cargar Producto</h2>
            <form action="admin.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Producto:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría:</label>
                    <select class="form-select" id="categoria" name="categoria" required>
                        <?php foreach ($categorias as $categoria) : ?>
                            <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="detalle" class="form-label">Detalle:</label>
                    <textarea class="form-control" id="detalle" name="detalle"></textarea>
                </div>

                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen:</label>
                    <input type="file" class="form-control" id="imagen" name="imagen">
                </div>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Guardar Producto" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>



