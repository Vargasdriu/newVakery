<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="registroProducto.php" method="post">
<h2>Nuevo Producto</h2>
<label for="nombre">Nombre:</label>
<input type="text" id="nombre" name="nombre" required>
<label for="precio">Precio:</label>
<input type="number" id="precio" name="precio" step="0.01" min="0" required>
<label for="cantidad">Cantidad:</label>
<input type="number" id="cantidad" name="cantidad" min="0" required>
<input type="submit" value="Registrar">
</form> 
</body>
</html>