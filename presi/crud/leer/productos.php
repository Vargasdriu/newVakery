<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$basededatos="bdproductos";

$conexion = new msql($servidor, $usuario, $contrasena, $basededatos);
if(conexion->connect_error ){
    die("Conexion fallida").$conexion->connect_error;
}
$sql="SELECT * FROM usuarios";
$resultado=$conexion->query($sql);

if($resultado->num_rows >0){
    while($fila = $resultado->fetch_assoc()){
        $id =$fila['id'];
        echo $fila['id']."".$fila['nombre']."".$fila['precio']."".$fila['cantidad'] ."";
        echo "<a href='producto.php?id=$id'>Mostrar</a> ";
        echo "<a href='formularioEditar.php?id=$id'>Editar</a> ";
        echo "<a href='eliminarProducto.php?id=$id' " .
            "onclick=\"return confirm('¿Eliminar este producto?');\">" .
            "Eliminar</a><br>";
    
        } else {
            echo "No hay productos registrados.";
        }
    }    
$conexion->close();
?>