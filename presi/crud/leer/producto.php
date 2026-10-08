<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "guiacrud";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
$conexion->set_charset("utf8mb4");
$id = (int) $_GET['id'];
$sql = "SELECT * FROM producto WHERE id = $id";
$resultado = $conexion->query($sql);
if ($fila = $resultado->fetch_assoc()) {
echo "ID: " . $fila['id'] . "<br>";
echo "Nombre: " . $fila['nombre'] . "<br>";
echo "Precio: " . $fila['precio'] . "<br>";
echo "Cantidad: " . $fila['cantidad'] . "<br>";
} else {
echo "El producto no existe.";
}
$conexion->close();
?>