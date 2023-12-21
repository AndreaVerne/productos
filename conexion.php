<?php
$servername = "localhost"; // Cambia esto si tu servidor no está en localhost
$username = "root";
$password = "1234";
$dbname = "mystic";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// echo "Conexión exitosa";

// Cerrar conexión
// $conn->close();
?>
