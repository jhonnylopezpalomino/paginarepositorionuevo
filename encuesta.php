
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <meta http-equiv="X-UA-compatible" content="ie-edge">
	 <link rel="stylesheet" href="css/encuesta.css">
	<title>encuesta</title>
</head>
<body>
	<center><h2>DEJANOS TU OPINION SOBRE EL CURSO</h2> </center>
	<div id="contieneformulari">
		<form action="" method="post">
			<input type="radio" name="calificacion" id="calificacion" value="EXCELENTE"> EXCELENTE <br>
			<input type="radio" name="calificacion" id="calificacion" value="BUENO"> BUENO <br>
			<input type="radio" name="calificacion" id="calificacion" value="REGULAR"> REGULAR <br>
			<input type="radio" name="calificacion" id="calificacion" value="MALO"> MALO <br>
			<input type="radio" name="calificacion" id="calificacion" value="PESIMO"> PESIMO <br>
			<br>
			<input type="submit" value="votar" name="votar" id="boton">

		</form>
	</div>
</body>
</html>

<?php
        include 'conexion.php';
//recibir datos y almacenar en variables
//$_SESSION['iddoc'] = $data['iddocentes'];
$calificacion = $_POST["calificacion"];

//consulta para insertar
$insertar = "INSERT INTO encuesta_satisfaccion(calificacion) VALUES ('$calificacion')";
//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
  echo 'error al enviar datos';
}
//else{
	//header("location:index.html");
  
//}
//cerrar conexion
mysqli_close($conexion);




