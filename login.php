<?php
session_start();
include "includes/config.php";
include "includes/funciones.php";

if(isset($_SESSION['usuario'])) {
	header("Location: index.php");
}

ini_set('error_reporting',0);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/contactame.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/contactame.css">
    <link rel="stylesheet" href="css/login.css">
  
  </head>


  <body>

      <div class="header-top">
        <div class="container">
          
        </div>
      </div>
      <div class="logo-wrap">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
              <a href="index.html">
                <img class="img-fluid" src="img/logo.png" alt="">
              </a>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
              <h1>BIENVENIDOS AL RESPOSITORIO WEB</h1>
            </div>
          </div>
        </div>
      </div>
        <div class="header-top">
        <div class="container">
          
        </div>
      </div>
      <section>
<form id="form1" name="form1" method="post" action="">
	<h3>Iniciar Sesion</h3>
      <img src="img/logo1.jpg" alt="">
   
    <input type="text" name="usuario" id="textfield" placeholder="Usuario" />

    <input type="password" name="contrasena" id="textfield2" placeholder="Contraseña" />
  
  
    <input type="submit" name="guardar" id="boton" value="Entrar" />
  
</form>
</section>

  </body>
</html>

<?php
if($_POST['guardar']) {

	$usuario = clean($_POST['usuario']);
	$contrasena = md5($_POST['contrasena']);
	
	$query = mysql_query("SELECT * FROM docentes WHERE usuario = '$usuario' AND contrasena = '$contrasena'");
	
	$contar = mysql_num_rows($query);
	
	if ($contar != 0) {
	
		while($row=mysql_fetch_array($query)) {
		
			if($usuario == $row['usuario'] && $contrasena == $row['contrasena']) 
			
			{
			
				$_SESSION['usuario'] = $usuario;
				
				$_SESSION['id'] = $row['id'];
				
				$_SESSION['rango'] = $row['rango'];
				
				header("Location: index.php");
				
			}
			
		} 
		
	} else { echo "El nombre de usuario y/o contrasena no coinciden"; }
	
}
?>



      
  