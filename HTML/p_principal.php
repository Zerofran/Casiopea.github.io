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
				<a href="#">
					<img src="../IMG/logo.png" alt="">
				</a>
			</div>

			<div class="menu"> 
				<nav>
					<ul>
						<li><a href="#">Hoteles</a></li>
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

				<section class="text__cover">
					<h1>Elige tu próximo destino</h1>
				</section>
			</div>

			<div>
				<img src="../IMG/img2.png" alt="">
				<img src="../IMG/img2.png" alt="">
				<img src="../IMG/img2.png" alt="">
				<img src="../IMG/img2.png" alt="">
				<img src="../IMG/img2.png" alt="">
				<img src="../IMG/img2.png" alt="">
			</div>
		</div>

	</main>

	<a href="../PHP/cerrar_sesion.php" class="cerrar-sesion">Cerrar Sesión</a>
</body>
</html>