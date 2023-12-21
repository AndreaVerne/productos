<?php

// require_once('../config.php');

class Model
{
    protected $conn; // Propiedad para almacenar la conexión

    public function __construct()
    {
        $this->conn = $this->conection(); // Almacena la conexión en la propiedad $conn
    }

    private function conection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $dbname = "mystic";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        return $conn; // Devuelve la instancia de mysqli
    }
}




