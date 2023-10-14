<?php 

	session_start();

	if (!isset($_SESSION['usuario'])) {
		echo '

			<script>
				alert("Por favor debes inciar sesion")
				window.location = "../index.php"
			</script>
		';
		session_destroy();
		die();
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina principal</title>

	<!-- aqui se linquea hacia la hoja de estilos .css -->
	<link rel="stylesheet" type="text/css" href="../CSS/style_principal.css">

</head>
<body>
	<!--HEADER - MENU-->

	<header>
		<div class="container__header">
			<div class="logo">
				<a href="p_principal.php">
					<img src="../IMG/logo.png" alt="">
				</a>
			</div>

	        <!-- Agregar aquí el botón de menú hamburguesa -->
	        <div class="menu-toggle">
	            <div class="bar"></div>
	            <div class="bar"></div>
	            <div class="bar"></div>
	        </div>
	        <!-- Fin del botón de menú hamburguesa -->

			<div class="menu"> 
				<nav>
					<ul>
						<li><a href="Bontones/Hoteles.php">Hoteles</a></li>
						<li><a href="#">Restaurantes</a></li>
						<li><a href="#">Gastronomía</a></li>
						<li><a href="#">rutas</a></li>
					</ul>
				</nav>
				
				<div class="socialMedia">
					<a href="#">
						<img src="../IMG/user.png" alt="">
					</a>
				</div>
			</div>

		</div>
	</header>

	<!--Portada de incio-->
	<main>
		<!--INICIO-->
		<!--Portada de incio-->
		<div class="container__cover div__offset">
			<div class="cover">
				<section class="img_cover">
					<img src="../IMG/img7.jpg" alt="">
				</section>
			</div>

			<!--En esta zona se deben de mostrar los distintos lugares de destino-->
			<div class="text_head"><h1>Elige tu próximo destino</h1></div>
			<div class="content_img">
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="Destinos_grit/Granada.php" class="btn_zona">Granada</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">León</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">Masaya</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">Rivas</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">Matagalpa</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">Managua</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">jinotega</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">Boaco</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">Estelí</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">Río San Juan</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">Carazo</a>
				</div>
				<div class="box_img">
					<img src="../IMG/img2.png" alt="">
					<a href="#" class="btn_zona">Chinandega</a>
				</div>
			</div>

			<!--carrucel de destinos recomendados segun el viaje-->
			<div class="text_head"><h1>Destinos recomentados según su tipo de viaje</h1></div>
			<div class="carousel-container">
				<button class="btn_carrucel" id="prevBtn">Anterior</button>
			    <ul class="carousel">
			        <li>
			            <div class="box_img">
			                <img src="../IMG/img6.jpeg" alt="">
			                <a href="#" class="btn_zona">Cultura</a>
			            </div>
			        </li>
			        <li>
			            <div class="box_img">
			                <img src="../IMG/img11.JPG" alt="">
			                <a href="#" class="btn_zona">Historia</a>
			            </div>
			        </li>
			        <li>
			            <div class="box_img">
			                <img src="../IMG/img2.png" alt="">
			                <a href="#" class="btn_zona">Alpinismo</a>
			            </div>
			        </li>

			        <li>
			            <div class="box_img">
			                <img src="../IMG/img9.jpeg" alt="">
			                <a href="#" class="btn_zona">Ciudad</a>
			            </div>
			        </li>
			        <li>
			            <div class="box_img">
			                <img src="../IMG/img10.JPG" alt="">
			                <a href="#" class="btn_zona">Natacion</a>
			            </div>
			        </li>

			        <li>
			            <div class="box_img">
			                <img src="../IMG/img1.png" alt="">
			                <a href="#" class="btn_zona">Senderismo</a>
			            </div>
			        </li>
			    </ul>
			    <button class="btn_carrucel"id="nextBtn">Siguiente</button>
			</div>
		</div>
		<!--Pie de paguina-->
		<footer>
			<h1>Este es el pie de paguina</h1>
			<h2>Lorem Impush</h2>
		</footer>

	</main>
	<a href="../PHP/cerrar_sesion.php" class="cerrar-sesion">Cerrar Sesión</a>
	<script type="text/javascript" src="../JS/carrusel.js"></script>
	<script type="text/javascript" src="../JS/menuAmburgesa.js"></script>
</body>
</html>