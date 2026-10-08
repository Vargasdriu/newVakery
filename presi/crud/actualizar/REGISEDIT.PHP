<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "guiacrud";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$sql = "UPDATE producto SET nombre='$nombre', precio='$precio', " ."cantidad='$cantidad' WHERE id=$id";
    if ($conexion->query($sql) === TRUE) {
        echo "El producto se editó exitosamente :)";
    } else {
        echo "Error: " . $conexion->error;
    }
$conexion->close();
?>