<?php
//Verificando el rol de ususario y revisar que secio esta abierta
include '../PHP/verificarRol_be.php';
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
						<li><a href="header_botones/hoteles/mostrar_producto.php">Hoteles</a></li>
						<li><a href="#">Restaurantes</a></li>
						<li><a href="#">Gastronomía</a></li>
						<li><a href="#">rutas</a></li>
					</ul>
				</nav>
				
				<div class="socialMedia">
					<a href="admin/perfil.php">
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
					<img src="../IMG/img8.jpg" alt="">
				</section>
			</div>

			<!--En esta zona se deben de mostrar los distintos lugares de destino-->
			<div class="text_head"><h1>Elige tu próximo destino</h1></div>
			<div class="content_img">
			    <div class="box_img">
			        <img src="../IMG/img1.png" alt="Boaco">
			        <a href="Destinos_grit/Boaco.php" class="btn_zona">Boaco</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img2.png" alt="Carazo">
			        <a href="Destinos_grit/Carazo.php" class="btn_zona">Carazo</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img3.png" alt="Chinandega">
			        <a href="Destinos_grit/Chinandega.php" class="btn_zona">Chinandega</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img1.png" alt="Chontales">
			        <a href="Destinos_grit/Chontales.php" class="btn_zona">Chontales</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img2.png" alt="Estelí">
			        <a href="Destinos_grit/Estelí.php" class="btn_zona">Estelí</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img3.png" alt="Granada">
			        <a href="Destinos_grit/Granada.php" class="btn_zona">Granada</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img1.png" alt="Jinotega">
			        <a href="Destinos_grit/Jinotega.php" class="btn_zona">Jinotega</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img2.png" alt="León">
			        <a href="Destinos_grit/León.php" class="btn_zona">León</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img3.png" alt="Madriz">
			        <a href="Destinos_grit/Madriz.php" class="btn_zona">Madriz</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img1.png" alt="Managua">
			        <a href="Destinos_grit/Managua.php" class="btn_zona">Managua</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img2.png" alt="Masaya">
			        <a href="Destinos_grit/Masaya.php" class="btn_zona">Masaya</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img3.png" alt="Matagalpa">
			        <a href="Destinos_grit/Matagalpa.php" class="btn_zona">Matagalpa</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img1.png" alt="Nueva Segovia">
			        <a href="Destinos_grit/Nueva_Segovia.php" class="btn_zona">Nueva Segovia</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img2.png" alt="Río San Juan">
			        <a href="Destinos_grit/Río_San_Juan.php" class="btn_zona">Río San Juan</a>
			    </div>
			    <div class="box_img">
			        <img src="../IMG/img3.png" alt="Rivas">
			        <a href="Destinos_grit/Rivas.php" class="btn_zona">Rivas</a>
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
		<footer class="piePagina">
			<h1>Este es el pie de paguina</h1>
			<h2>Lorem Impush</h2>
		</footer>

	</main>
	<a href="../PHP/cerrar_sesion.php" class="cerrar-sesion">Cerrar Sesión</a>
	<script type="text/javascript" src="../JS/carrusel.js"></script>
	<script type="text/javascript" src="../JS/menuAmburgesa.js"></script>

	<script type="text/javascript">
	  // En cualquier otro script en la misma página
	//se puede llamar de manera normal pero estoe es por si el php se ejecuta muy tarde
	  function waitForCargo() {
	    return new Promise((resolve) => {
	      if (window.id_cargo !== undefined) {
	        resolve(window.id_cargo);
	      } else {
	        setTimeout(() => waitForCargo().then(resolve), 100);
	      }
	    });
	  }

	  waitForCargo().then((cargo) => {
	    console.log("El valor de id_cargo es: " + cargo);
	    // Puedes realizar acciones que dependan de cargo aquí
	  });
	</script>
</body>
</html>