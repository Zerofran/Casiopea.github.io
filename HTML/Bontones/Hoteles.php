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
	<link rel="stylesheet" type="text/css" href="../../CSS/Hoteles.css">
	<!--Links para las fuentes-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>

	<!--HEADER - MENU-->

	<header>
		<div class="container__header">
			<div class="logo">
				<a href="../../HTML/p_principal.php">
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
				<nav>
					<ul>
						<li><a href="chatbot.php">Preguntame!</a></li>
						<li><a href="Hoteles.php">Hoteles</a></li>
						<li><a href="#">Restaurantes</a></li>
						<li><a href="#">Gastronomía</a></li>
						<li><a href="#">Museos</a></li>
						<li><a href="#">Rutas</a></li>
					</ul>
				</nav>
				
				<div class="socialMedia">
					<a href="#">
						<img src="../../IMG/user.png" alt="">
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
			<!--carrucel de destinos recomendados segun el viaje-->
			<div class="text_head"><center><h1>Hoteles recomendados según tu ubicación actual</h1></center></div>
			<div class="carousel-container">
				<button class="btn_carrucel" id="prevBtn">Anterior</button>
			    <ul class="carousel">
					<li>
					    <div class="box_img">
					        <img src="../../IMG/img1.png" alt="">
					        <form class="star">
					            <fieldset class="clasificacion">
					                <legend>Tu puntuación:</legend>
					                <input id="radio1_1" type="radio" name="estrellas_1" value="5">
					                <label for="radio1_1"></label>
					                <input id="radio2_1" type="radio" name="estrellas_1" value="4">
					                <label for="radio2_1"></label>
					                <input id="radio3_1" type="radio" name="estrellas_1" value="3">
					                <label for="radio3_1"></label>
					                <input id="radio4_1" type="radio" name="estrellas_1" value="2">
					                <label for="radio4_1"></label>
					                <input id="radio5_1" type="radio" name="estrellas_1" value="1">
					                <label for="radio5_1"></label>
					            </fieldset>
					        </form>
					        <div class="info">
					        	<div class="text_info"><h3>Aquí debe ir información sobre el lugar</h3></div>
					        	<div class="puntaje"><h3>otros usuarios puntuaron: 4.5★</h3></div>
					        </div>
					    </div>
					</li>	

					<li>
					    <div class="box_img">
					        <img src="../../IMG/img2.png" alt="">
					        <form class="star">
					            <fieldset class="clasificacion">
					                <legend>Tu puntuación:</legend>
					                <input id="radio1_2" type="radio" name="estrellas_2" value="5">
					                <label for="radio1_2"></label>
					                <input id="radio2_2" type="radio" name="estrellas_2" value="4">
					                <label for="radio2_2"></label>
					                <input id="radio3_2" type="radio" name="estrellas_2" value="3">
					                <label for="radio3_2"></label>
					                <input id="radio4_2" type="radio" name="estrellas_2" value="2">
					                <label for="radio4_2"></label>
					                <input id="radio5_2" type="radio" name="estrellas_2" value="1">
					                <label for="radio5_2"></label>
					            </fieldset>
					        </form>
					        <div class="info">
					        	<div class="text_info"><h3>Aquí debe ir información sobre el lugar</h3></div>
					        	<div class="puntaje"><h3>otros usuarios puntuaron: 4.5★</h3></div>
					        </div>
					    </div>
					</li>
					<li>
					    <div class="box_img">
					        <img src="../../IMG/img3.png" alt="">
					        <form class="star" id="star">
					            <fieldset class="clasificacion">
					                <legend>Tu puntuación:</legend>
					                <input id="radio1_3" type="radio" name="estrellas_3" value="5">
					                <label for="radio1_3"></label>
					                <input id="radio2_3" type="radio" name="estrellas_3" value="4">
					                <label for="radio2_3"></label>
					                <input id="radio3_3" type="radio" name="estrellas_3" value="3">
					                <label for="radio3_3"></label>
					                <input id="radio4_3" type="radio" name="estrellas_3" value="2">
					                <label for="radio4_3"></label>
					                <input id="radio5_3" type="radio" name="estrellas_3" value="1">
					                <label for="radio5_3"></label>
					            </fieldset>
					        </form>
					        <div class="info">
					        	<div class="text_info"><h3>Aquí debe ir información sobre el lugar</h3></div>
					        	<div class="puntaje"><h3>otros usuarios puntuaron: 4.5★</h3></div>
					        </div>
					    </div>
					</li>	
					<li>
					    <div class="box_img">
					        <img src="../../IMG/img1.png" alt="">
					        <form class="star">
					            <fieldset class="clasificacion">
					                <legend>Tu puntuación:</legend>
					                <input id="radio1_4" type="radio" name="estrellas_4" value="5">
					                <label for="radio1_4"></label>
					                <input id="radio2_4" type="radio" name="estrellas_4" value="4">
					                <label for="radio2_4"></label>
					                <input id="radio3_4" type="radio" name="estrellas_4" value="3">
					                <label for="radio3_4"></label>
					                <input id="radio4_4" type="radio" name="estrellas_4" value="2">
					                <label for="radio4_4"></label>
					                <input id="radio5_4" type="radio" name="estrellas_4" value="1">
					                <label for="radio5_4"></label>
					            </fieldset>
					        </form>
					        <div class="info">
					        	<div class="text_info"><h3>Aquí debe ir información sobre el lugar</h3></div>
					        	<div class="puntaje"><h3>otros usuarios puntuaron: 4.5★</h3></div>
					        </div>
					    </div>
					</li>													
			    </ul>
			    <button class="btn_carrucel"id="nextBtn">Siguiente</button>
			</div>
		</div>

	</main>

	<a href="../PHP/cerrar_sesion.php" class="cerrar-sesion">Cerrar Sesión</a>
	<script type="text/javascript" src="../../JS/carrusel.js"></script>
</body>
</html>