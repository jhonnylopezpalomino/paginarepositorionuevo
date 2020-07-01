<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php 
	include "conexion.php";
?>
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		
		<meta name="description" content="">
		<!-- Meta Keyword -->
		
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>REPOSITORIO</title>
	
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/cursos/bannercursos.css">
		<link rel="stylesheet" href="css/cursos/estiloscursos.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/curso.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/video-js.css">
		<script src="js/video.js"></script>
	</head>
	<body>
		<header>
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
			  <nav class="menu-principal">
            <a href="index.php" >Inicio</a>
            <a href="#" class="active">Curso</a>
             <a href="Ranking.html">Ranking</a>
              <a href="reportes.html">Reportes</a>
               <a href="Noticias.html">Noticias</a>
               <a href="Nosotros.html">Nosotros</a>
                <a href="Contactame.html">Contactenos</a>
                <a href="logout.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
                 
        </nav>
		
			<section id="banner">
                <img src="img/imagencursos/bannercursos.jpg">
                <div class="contenedor">
                    <h2>BLACKBOARD</h2>
                    <p>Usted puede visualizar todos los videos disponibles para este curso</p>
                </div>
                <center><p>Usted puede visualizar todos los videos disponibles para este curso</p></center>
                <div class="curso">
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard">
						<source src="video/videoBB1.mp4" type="video/mp4"> 

					</video>
					<center><span>Introducción a Blackboard</span></center>	
					<center><a href="reproductor1bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard',{
            		});
            	</script>
            	<div class="curso">
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_1">
						<source src="video/videoBB2.mp4" type="video/mp4"> 
					</video>
					<center><span>como ingresar a la video conferencia</span></center>
					<center><a href="reproductor2bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard_1',{
            		});
            	</script>
            	<div class="curso">
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_2">
						<source src="video/videoBB3.mp4" type="video/mp4"> 
					</video>
					<span>MENÚ USO DE COLLABORATE _ Collaborate</span>
					<center><a href="reproductor3bb.php">PLAY</a></center>	
            	</div>
				<script>
            		var reproductor = videojs('vblackboard_2',{
            		});
            	</script>
            	<div class="curso">
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_3">
						<source src="video/videoBB4.mp4" type="video/mp4"> 
					</video>
					<span>CONOCIENDO EL PANEL COLLABORATE _ Collaborate</span>
					<center><a href="reproductor4bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard_3',{
            		});
            	</script>
            	<div class="curso">
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_4">
						<source src="video/videoBB5.mp4" type="video/mp4"> 
					</video>
					<span>ZONA MULTIMEDIA DE COLLABORATE _ Collaborate</span>
					<center><a href="reproductor5bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard_4',{
            		});
            	</script>
            	<div class="curso">
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_5">
						<source src="video/videoBB6.mp4" type="video/mp4"> 
					</video>
					<span>USANDO LA PIZARRA DE COLLABORATE _ Collaborate</span>
					<center><a href="reproductor6bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard_5',{
            		});
            	</script>
            	<div class="curso">
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_6">
						<source src="video/videoBB7.mp4" type="video/mp4"> 
					</video>
					<span>INTERFAZ DEL ROL MODERADOR _ Collaborate</span>	
					<center><a href="reproductor7bb.php">PLAY</a></center>	
				</div>
            	<script>
            		var reproductor = videojs('vblackboard_6',{
            		});
            	</script>
			</section>
			
		</header>
		<button type="button" class="btn btn-success" onclick="window.location.href='encuesta.php'">ENCUESTA FINAL</button >
		


	</body>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
</html>