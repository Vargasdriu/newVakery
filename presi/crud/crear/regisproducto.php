<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$basededatos="bdproductos";

 $conexion = new mysql($servidor, $usuario, $contrasena, $basededatos);
 if(conexion->connect_error){
    die("Conexion fallida:".conexion->connect_error)
 }
 $nombre = $_POST['nombre'];
 $precio = $_POST['precio'];
 $cantidad = $_POST['cantidad'];

    $sql ="INSERT INTO productos (nombre, precio, cantidad)"." VALUES ('$nombre', '$precio', '$cantidad')";

    if($conexion->query($sql) === TRUE){
        echo"producto creado";
    }else{
        echo"Error:".$sql."<br>".$conexion->error;
    }
    $conexion->close();
?>