<?php 
include '../../PHP/verificarRol_be.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Destinos</title>

	<!-- aqui se linquea hacia la hoja de estilos .css -->
	<link rel="stylesheet" type="text/css" href="../../CSS/Destinos.css">

</head>
<body>

	<!--HEADER - MENU-->
	<header>
		<div class="container__header">
			<div class="logo">
				<a href="../p_principal.php">
					<img src="../../IMG/logo.png" alt="">
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
				<!-- class="btn_axes" para los botones subrayados-->
				<nav>
					<ul>
						<li><a href="../header_botones/hoteles/mostrar_producto.php">Hoteles</a></li>
						<li><a href="#">Restaurantes</a></li>
						<li><a href="#">Gastronomía</a></li>
						<li><a href="#">rutas</a></li>
					</ul>
				</nav>

				<div class="socialMedia">
					<a href="../admin/perfil.php">
						<img src="../../IMG/user.png" alt="">
					</a>
				</div>
			</div>

		</div>
	</header>

	<main>
		<div class="container__cover div__offset">
			<div class="titulo"><h1>Granada</h1></div>
			<div class="cover">
				<section class="btn_cover1">
					<div>
						<h2>Infromacion y detalles sobre</h2>
						<h2>Granada</h2>
					</div>
					<div>
						<h2>¿Que visitar en Granada?</h2>
						<h4>Recomendaciones</h4>
					</div>
				</section>

				<section class="btn_cover2">
					<a href="#"><h2>Ver rutas</h2></a>
					<a href="#"><h2>Restaurantes</h2></a>
					<a href="#"><h2>Hoteles Recomendados</h2></a>
					<a href="#"><h2>Calcular presupuesto</h2></a>
				</section>
			</div>
		</div>
		<!--Pie de paguina-->
		<footer>
			<h1>Este es el pie de paguina</h1>
			<h2>Lorem Impush</h2>
		</footer>
	</main>
	<a href="../PHP/cerrar_sesion.php" class="cerrar-sesion">Cerrar Sesión</a>
	<script type="text/javascript" src="../../JS/menuAmburgesa.js"></script>
</body>
</html>