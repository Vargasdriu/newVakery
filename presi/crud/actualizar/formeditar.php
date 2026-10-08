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
$sql = "SELECT * FROM producto WHERE id = $id";
$resultado = $conexion->query($sql);
    if ($fila = $resultado->fetch_assoc()) {
        $nombre = $fila['nombre'];
        $precio = $fila['precio'];
        $cantidad = $fila['cantidad'];
    } else {
        die("El producto no existe.");
    }
$conexion->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar producto</title>
</head>
<body>
    <h2>Editar Producto</h2>
    <form action="registroEditar.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"
        value="<?= htmlspecialchars($nombre) ?>" required>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" min="0"
        value="<?= $precio ?>" required>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="0"
        value="<?= $cantidad ?>" required>
        <input type="submit" value="Guardar cambios">
    </form>
</body>
</html>