<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cambiar Contraseña </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/contactame.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/contactame.css">
    <link rel="stylesheet" href="css/cambiarcontraseña.css">
  
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
    <?php 
        if(isset($_POST['editar'])){

          requiere "conexion.php";

          $clave = $mysqli→real_escape_string($_POST['clave']);
          $clave1 = $mysqli→real_escape_string($_POST['clave1']);
          $clave2 = $mysqli→real_escape_string($_POST['clave2']);

          $clave = md5($clave);
          $clave1 = md5($clave1);
          $clave2 = md5($clave2);

          $sqlA = $mysqli→query("SELECT clave FROM docentes WHERE id= '".$_SESSION['id']."'");
          $rowA = $sqlA→fetch_array();

          if($rowA['clave'] == $clave){
          if($clave1 == $clave2){

            $update = $mysqli→query("UPDATE docentes SET clave = '$clave1' WHERE id = '".$_SESSION['id']."'");
            if($update){echo "se ha actualizado tu Contraseña";}
          }
          else{
            echo "las dos contraseñas no coinciden";
            }

          }
          else{
            echo "tu contraseña actual no coincide";
          }
        }

    ?>
      <h3>Cambiar Contraseña</h3>
      <img src="img/logo1.jpg" alt="">

      <input type="text" name="usuario" placeholder="Usuario">
      <input type="password" name="clave" placeholder="Contraseña">
      <input type="password" name="clave1" placeholder="Nueva Contraseña">
      <input type="password" name="clave2" placeholder="Confirmar Contraseña">
    
      <input type="submit" value="Cambiar Contraseña" id="boton">
      <p class="alert"><a href="logeo.php">VOLVER AL LOGIN</a></p>

    </form>
  </section>

  </body>
</html>