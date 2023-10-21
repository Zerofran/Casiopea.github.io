<?php
// Iniciar la sesión
session_start();

// Verificar si la sesión está iniciada
if (isset($_SESSION['usuario'])) {
    $urlDestino = "1true";
} else {
    $urlDestino = "0false";
}
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
						<li><a href="#" id="chatbot">Preguntame!</a></li>
						<li><a href="#" id="hoteles">Hoteles</a></li>
						<li><a href="#" id="restaurantes">Restaurantes</a></li>
						<li><a href="#" id="gastronomia">Gastronomía</a></li>
						<li><a href="#" id="museo">Museos</a></li>
						<li><a href="#" id="rutas">Rutas</a></li>
					</ul>
				</nav>
				
				<div class="socialMedia">
					<a href="#" id="ajustes">
						<img src="../IMG/user.png" alt="">
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
                <label for="origin"></label>
                <input type="text" id="origin" value="12.143150809565306, -86.2740535044753" required><br>

                <label for="destiny"></label>
                <input type="text" id="destiny" value="12.141944597234328, -86.27234761945097" required><br>


                <label for="transportation">Destino:</label>
                <select id="transportation">
                    <option value="driving">Vehiculo</option>
                    <option value="bicycling">Bicleta</option>
                    <option value="walking">Caminando</option>
                </select>
                <button type="button" onclick="mostrarMapa()">Obtener Ruta</button>
            </form>
        </div>
		<div class="map_info_container">
			<h1>Mapa de la ruta</h1>
			<p>Este es el mapa de la ruta recomendada para viajar por Granada.
			<br>Puedes movilizarte en bicicleta, Vehiculo y a pie.
			</p>
        	<div style="background-color: rgba(red, green, blue, 0); height: 400px; width: 400px;" class="map_container" id="map-container"></div>
		</div>
	</div>
	<script src="../JS/rutaAtoB.js"></script>
	<script src="../JS/menuAmburgesa.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
		// Obtener todas las etiquetas <a> que quieres cambiar
		const chatbot = document.getElementById("chatbot");
		const hoteles = document.getElementById("hoteles");
		const restaurantes = document.getElementById("restaurantes");
		const gastronomia = document.getElementById("gastronomia");
		const museo = document.getElementById("museo");
		const rutas = document.getElementById("rutas"); 
		const ajustes = document.getElementById("ajustes");

		// Verificar el valor de urlDestino
		var urlDestino = "<?php echo $urlDestino; ?>";

		if (urlDestino === "1true") {
			// Cambiar la URL para el enlace chatbot
			chatbot.href = "chatbot.php";

			// Cambiar la URL para el enlace hoteles
			hoteles.href = "../HTML/header_botones/hoteles/mostrar_producto.php";

			// Cambiar la URL para el enlace restaurantes
			restaurantes.href = "URL_si_sesion_iniciada.php";

			gastronomia.href = "URL_si_sesion_iniciada.php";

			museo.href = "URL_si_sesion_iniciada.php";

			rutas.href = "rutas.php";

			ajustes.href = "admin/ajustes.php";

		} 
		else if (urlDestino === "0false") {
			alert('se requiere una cuenta para permisos superiores')
			// Cambiar la URL para el enlace chatbot
			chatbot.href = "../index.php";

			// Cambiar la URL para el enlace hoteles
			hoteles.href = "../index.php";

			// Cambiar la URL para el enlace restaurantes
			restaurantes.href = "../index.php";

			gastronomia.href = "../index.php";

			museo.href = "../index.php";

			rutas.href = "../index.php";	

			ajustes.href = "../index.php";	    
		}
	});
	</script>
</body>
</html>