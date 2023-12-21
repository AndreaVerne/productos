<?php include '../controllers/ProductController.php'; 
include 'menu.php';
$productController = new ProductController();
?>
    <?php
// Manejo de solicitudes según los parámetros o rutas
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Si se solicita el formulario de carga de productos
    $productController->showFormulario();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Si se envía el formulario para guardar un producto
    $productController->guardarProducto();

    if($productController){
        echo '<div class="alert alert-success mt-4" role="alert">
        ¡El producto se ha guardado exitosamente!
    </div>';
    }

}

include 'footer.php' ?>



