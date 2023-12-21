<?php
include 'Model.php';
class ProductModel extends Model
{
    
    //PRODUCTOS
    public function getAllProducts()
    {
        $sql = "SELECT * FROM productos";
        $result = $this->conn->query($sql);
        $products = array();
        
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        return $result;
    }

    //CATEGORIAS
        public function getAllCategories()
        {
            $sql = "SELECT * FROM categoria";
            $result = $this->conn->query($sql);
            $categories = array();
            
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row;
            }
    
            return $result;
        }

        public function insertarProducto($nombre, $precio, $categoria, $detalle, $imagen)
        {

            $sql = "INSERT INTO productos (nombre, precio, id_categoria, detalle, imagen) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            if (!$stmt) {
                die('Error al preparar la consulta: ' . $this->conn->error);
            }
            // Suponiendo que $nombre, $precio, $categoria, $imagen son las variables con los valores a insertar
            $stmt->bind_param("siss", $nombre, $precio, $categoria,$detalle, $imagen);
            
            // Ejecutar la sentencia preparada para insertar los datos
            $stmt->execute();
        }

}
