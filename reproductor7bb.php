<?php
session_start();
include "includes/config.php";
include "includes/funciones.php";

if(!isset($_SESSION['usuario'])) {
	header("Location: login.php");
}

ini_set('error_reporting',0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">	
	<link rel="stylesheet" href="css/video-js.css">
	<script src="js/video.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" href="css/estilosreproductor.css">
	 <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  
  <link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>reproductor</title>
</head>
<body>
	<header>
		<br></br>
		<br></br>
		<h1 class="titulo">INTERFAZ DEL ROL MODERADOR _ Collaborate</h1>
	</header>

	<main>
		<div class="contenedor">

			<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
				<source src="video/videoBB7.mp4" type="video/mp4">
			</video>
	
			<article>
				<center>	<h2>BLACKBOARD</h2> </center>
				<p>De manera institucional, los expertos de la Compañía Blackboard vienen capacitando en todos los pormenores de la plataforma virtual de Blackboard, la que será el moderno Campus Virtual de cualquier Universidad que lo use, mediante el cual se brinda diversos  productos educativos y de enseñanza-aprendizaje interrelacionados entre sí, y con distintas características y funcionalidades.</p><br />
				
			</article>
		</div>
	</main>
	<div id="L">

<h1> COMENTARIOS </h1>

<form name="form1" method="post" action="">
  <label for="textarea"></label>
  <center>
    <p>
      <textarea name="comentario" cols="80" rows="5" id="textarea"><?php if(isset($_GET['user'])) { ?>@<?php echo $_GET['user']; ?><?php } ?> </textarea>
    </p>
    <p>
      <input type="submit" <?php if (isset($_GET['id'])) { ?>name="reply"<?php } else { ?>name="comentar"<?php } ?>value="Comentar">
    </p>
  </center>
</form>

<?php
	if(isset($_POST['comentar'])) {
		$query = mysql_query("INSERT INTO comentarios (comentario,usuario,fecha) value ('".$_POST['comentario']."','".$_SESSION['id']."',NOW())");	
		if($query) { header("Location: reproductor.php"); }
	}
?>

<?php
	if(isset($_POST['reply'])) {
		$query = mysql_query("INSERT INTO comentarios (comentario,usuario,fecha,reply) value ('".$_POST['comentario']."','".$_SESSION['id']."',NOW(),'".$_GET['id']."')");	
		if($query) { header("Location: reproductor.php"); }
	}
?>

<br>

	<div id="container">
    	<ul id="comments">
        
        <?php
		
        $comentarios = mysql_query("SELECT * FROM comentarios WHERE reply = 0 ORDER BY id DESC");
		while($row=mysql_fetch_array($comentarios)) {
			
			$usuario = mysql_query("SELECT * FROM docentes WHERE id = '".$row['usuario']."'");
			$user = mysql_fetch_array($usuario);

		?>
        
        	<li class="cmmnt">
            	<div class="avatar">
                <img src="<?php echo $user['avatar']; ?>" height="55" width="55">
                </div>
                <div class="cmmnt-content">
                	
                    <a href="#" class="userlink"><?php echo $user['usuario']; ?></a> - <span class="pubdate"><?php echo $row['fecha']; ?></span>
             
                    <p>
                    <?php echo $row['comentario']; ?>
                    </p>
                    <span>
                    <a href="reproductor.php?user=<?php echo $user['usuario']; ?>&id=<?php echo $row['id']; ?>">
                    Responder
                    </a>
                    </span>
                </div>
                
                <?php
				$contar = mysql_num_rows(mysql_query("SELECT * FROM comentarios WHERE reply = '".$row['id']."'"));
				if($contar != '0') {
					
					$reply = mysql_query("SELECT * FROM comentarios WHERE reply = '".$row['id']."' ORDER BY id DESC");
					while($rep=mysql_fetch_array($reply)) {
						
					$usuario2 = mysql_query("SELECT * FROM docentes WHERE id = '".$rep['usuario']."'");
					$user2 = mysql_fetch_array($usuario2);
				?>
                
                <ul class="replies">
                	<li class="cmmnt">
                    	<div class="avatar">
                <img src="<?php echo $user2['avatar']; ?>" height="55" width="55">
                </div>
                	<div class="cmmnt-content">
                        
                        <a href="#" class="userlink"><?php echo $user2['usuario']; ?></a> - <span class="pubdate"><?php echo $rep['fecha']; ?></span>
                   
                        <p>
                        <?php echo $rep['comentario']; ?>
                        </p>
                    </div>
                    
                    </li>
                </ul>
                
                <?php } } } ?>
            </li>        
        
        </ul>
    </div>
     <center><h1><a href="blackboard.php">SALIR</a></h1></center>
</div>

	<script>
		var reproductor = videojs('fm-video', {
			fluid: true
		});
	</script>
</body>
</html>
