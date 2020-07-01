<?php
        include 'conexion.php';
//recibir datos y almacenar en variables
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
//consulta para insertar
$insertar = "INSERT INTO contactos(nombre,email,asunto,mensaje) VALUES ('$nombre','$email','$asunto', '$mensaje')";
//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
  echo 'error al enviar datos';
}else{
	header("location:index.php");
  
}
//cerrar conexion
mysqli_close($conexion);