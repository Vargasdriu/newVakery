<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "guiacrud";
$conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);
if ($conexion->connect_error) {
die("Conexión fallida: " . $conexion->connect_error);
}
$id = $_GET['id'];
$sql = "DELETE FROM producto WHERE id = $id";
if ($conexion->query($sql) === TRUE) {
if ($conexion->affected_rows > 0) {
echo "El producto se eliminó exitosamente";
} else {
echo "No existe un producto con ese ID";
}
} else {
echo "Error al eliminar: " . $conexion->error;
}
$conexion->close();
?>