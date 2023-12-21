<?php

require_once('models/ProductModel.php');


class ProductController
{
    private $productModel;
    private $productView;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    //me trae todos los productos de la base y todas las categorias y me muestra los boxs con cada producto
    public function showHome()
    {
        $productos = $this->getProducts();
        $categorias = $this->getCategories();
        include('views/ProductView.php');
        return $productos;
        
    }

        //me trae todas las categorias de la base
        public function getProducts()
        {
            $categorias = $this->productModel->getAllProducts();
    
            return $categorias;
        }

    //me trae todas las categorias de la base
    public function getCategories()
    {
        $categorias = $this->productModel->getAllCategories();

        return $categorias;
    }

    public function showFormulario()
    {
        include('../views/formulario.php');
    }

    //guardar en la base
 public function guardarProducto()
    {
        if (isset($_POST['submit'])) {
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $categoria = $_POST['categoria'];
            $categoria = $_POST['detalle'];
            $imagen = $_FILES['imagen']['name'];
            $imagen_temp = $_FILES['imagen']['tmp_name'];
            $ruta_imagen = "../assets/images/productos/" . $imagen;

            move_uploaded_file($imagen_temp, $ruta_imagen);

            // Guardar el producto en la base de datos
            $this->productModel->insertarProducto($nombre, $precio, $categoria, $detalle, $ruta_imagen);
            return true;
        }else{
            return false;
        }
    }
}
