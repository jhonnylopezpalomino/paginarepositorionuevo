<?php

  $alert = '';
  if(!empty($_POST))
  {
    if(empty($_POST['usuario'])||empty($_POST['contrasena']))
    {
      $alert= 'ingrese su usuario y su clave';
    }else{
      require_once "conexion.php";

      $user = mysqli_real_escape_string($conexion,$_POST['usuario']);
      $contrasena = md5(mysqli_real_escape_string($conexion,$_POST['contrasena']));

      $query = mysqli_query($conexion, "SELECT * FROM docentes WHERE  usuario= '$user' AND contrasena= '$contrasena'");
      $result = mysqli_num_rows($query);

      if($result > 0)
      {
        $data = mysqli_fetch_array($query);
        session_start();
        $_SESSION['active'] = true;
        $_SESSION['id'] = $data['iddocentes'];
        $_SESSION['nombre'] = $data['Nombres'];
        $_SESSION['apellidos'] = $data['apellidos'];
        $_SESSION['correo'] = $data['correo'];
        $_SESSION['usuario'] = $data['usuario'];
        $_SESSION['estado'] = $data['estado'];

        header('location:index.php');
      }else{
        $alert = 'el usuario o la clave son incorrectos ';
        //session_destroy();
      }
      
    }
  }
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

      <form action="" method="post">
      <h3>Iniciar Sesion</h3>
      <img src="img/logo1.jpg" alt="">

      <input type="text" name="usuario" placeholder="Usuario">
      <input type="password" name="contrasena" placeholder="Contraseña">
      <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
      <input type="submit" value="INGRESAR" id="boton">
       <p class="alert"><a href="cambiarcontraseña.html">Cambiar Contraseña</a></p>
      <p class="alert"><a href="recuperarcontraseña.html">Recuperar Contraseña</a></p>
     

    </form>
  </section>

  </body>
</html>