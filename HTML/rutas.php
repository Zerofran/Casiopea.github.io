<?php
//Verificando el rol de ususario y revisar que secio esta abierta
include '../PHP/verificarRol_be.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu ubicación actual</title>

    <!-- aqui se linquea hacia la hoja de estilos .css -->
	<link rel="stylesheet" type="text/css" href="../CSS/rutas.css">
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
						<li><a href="chatbot.php">Preguntame!</a></li>
						<li><a href="../HTML/header_botones/hoteles/mostrar_producto.php">Hoteles</a></li>
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
    
    <!--Aqui termina el header-->

    <div class="container__cover div__offset">

        </div>
        <div class="container_form">
            <form>
                <label for="origin">Latitud del Origen:</label>
                <input type="text" id="origin" required><br>

                <label for="destiny">Latitud del Destino:</label>
                <input type="text" id="destiny" required><br>


                <label for="transportation">Destino:</label>
                <select id="transportation">
                    <option value="driving">Vehiculo</option>
                    <option value="bicycling">Bicleta</option>
                    <option value="walking">Caminando</option>
                </select>>
                <button type="button" onclick="mostrarMapa()">Obtener Ruta</button>
            </form>
        </div>
        <div style="background-color: rgba(red, green, blue, 0); height: 400px; width: 400px;" class="map_container" id="map-container"></div>

        <script src="script.js"></script>

    </div>
</body>
</html>