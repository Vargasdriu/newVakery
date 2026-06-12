<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo Producto</title>
   <link rel="stylesheet" href="estiloscrear.css">   
</head>
<body>
  <header class="main-header">

    <div class="header-logo">
      <img src="../imagenes/logo.png" alt="Vakery's">
    </div>

    <label for="btn-nav" class="btn-nav">
      <img src="../imagenes/menu.png" alt="Menu">
    </label>

    <input type="checkbox" id="btn-nav">

    <nav>

      <ul class="menu">
        <li><a href="../paginadeinicio.html">Inicio</a></li>
        <li><a href="#">Iniciar sesión</a></li>
        <li><a href="../paginaproductos.html">Productos</a></li>
        <li><a href="#">Promociones</a></li>
        <li><a href="../sobrevakerys1.html">Sobre Vakery's</a></li>
        <li><a href="../paginaadmin.html">Página Administrador</a></li>
      <li><a href="paginavendedor.html">Página Vendedor</a></li>
      </ul>

    </nav>

  </header>
  <video autoplay muted loop>
    <source src="../imagenes/vdapplepie.mp4" type="video/mp4">

</video>

<div class="capa"></div>

<div class="tra">

<form action="registroproducto.php" method="post">

<h2>Nuevo Producto</h2>

<label>Ingrese:</label>

<input type="text" placeholder="CODIGO" name="Codigo" >
<input type="text" placeholder="NOMBRE" name="NombreProducto" >
<input type="number" placeholder="PRECIO DE VENTA" name="PrecioProducto" >
<input type="text" placeholder="DETALLE" name="DetalleProducto" >
<input type="number" placeholder="COSTO" name="CostoProducto" >
<input type="number" placeholder="STOCK" name="Stock" >
<input class="buttom" type="submit" value="Registrar">

</form>

</div>
<script>
    var cod=document.getElementByName("Codigo");
    var np=document.getELementByName("NombreProducto");
    var prp=document.getElementByName("PrecioProducto");
    var det=document.getElementByName("DetalleProducto");
    var csp=document.getElementByName("CostoProducto");
    var sto=document.GetElementByName("Stock");
    var expRegNombre=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    var expRegNumeros=/^[0-9]*$/;
    var expRegEmail=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    function validar(
       if(cod.value==""){ //Codigo
                alert("este campo no puede ir vacio");
                cod.focus();
                return false;
            }if(!expRegNumeros.exec(cod.value)){
                alert("introduce solo numeros");
                cod.focus();
                return false;
            }//NombreProducto
            if(np.value==""){
                alert("este campo no puede ir vacio");
                np.focus();
                return false;
            }if(!expRegNombre.exec(np.value)){
                alert("introduce solo palabras");
                np.focus();
                return false;
            }//PrecioProducto
            if(prp.value==""){
                alert("este campo no puede ir vacio");
                prp.focus();
                return false;
            }if(!expRegNumero.exec(prp.value)){
                alert("introduce solo numeros");
                prp.focus();
                return false;
            }//DetalleProducto
            if(det.value==""){
                alert("este campo no puede ir vacio");
                det.focus();
                return false;
            }if(!expRegNumeros.exec(det.value)){
                alert("introduce solo numeros");
                det.focus();
                return false;
            }//CostoProducto
            if(csp.value==""){
                alert("este campo no puede ir vacio");
                csp.focus();
                return false;
            }if(!expRegNumero.exec(csp.value)){
                alert("introduce solo letras");
                csp.focus();
                return false;
            }//Stock
            if(sto.value==""){
                alert("este campo no puede ir vacio");
                sto.focus();
                return false;
            }if(!expRegNumero.exec(sto.value)){
                alert("introduce solo numeros");
                sto.focus();
                return false;
            }
    )
    
</script>
</body>
</html>
