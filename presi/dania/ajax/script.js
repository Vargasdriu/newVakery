function ZA(){
    fetch("mensaje.php")
    .then(respuesta =>respuesta.text())
    .then(datos =>{
        document.getElementById("zhair").innerHTML = datos;
    }
    )
}