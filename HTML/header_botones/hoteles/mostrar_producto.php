<<<<<<< HEAD
<?php
<<<<<<< Updated upstream
//Verificando el rol de ususario y revisar que secio esta abierta
include '../../../PHP/verificarRol_be.php';
=======
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

>>>>>>> 9eeda649c777f0ed730aeb777882743a06071fec
=======
// Iniciar la sesión
session_start();

// Verificar si la sesión está iniciada
if (isset($_SESSION['usuario'])) {
    $urlDestino = "1true";
} else {
    $urlDestino = "0false";
}
>>>>>>> Stashed changes
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../HTML/header_botones/css/mostrarProducto.css">
    <title>Filtro de Hoteles</title>
</head>
<body>
    <!--HEADER - MENU-->

    <header>
<<<<<<< Updated upstream
        <div class="container__header">
            <div class="logo">
                <a href="../../../HTML/p_principal.php">
                    <img src="../../../IMG/logo.png" alt="">
                </a>
            </div>
=======
		<div class="container__header">
			<div class="logo">
				<a href="../../../HTML/p_principal.php">
					<img src="../../../IMG/logo.png" alt="">
				</a>
			</div>
>>>>>>> Stashed changes

            <!-- Agregar aquí el botón de menú hamburguesa -->
            <div class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <!-- Fin del botón de menú hamburguesa -->

<<<<<<< Updated upstream
            <div class="menu"> 
                <nav>
                    <ul>
                        <li><a href="#" class="btn_axes">Hoteles</a></li>
                        <li><a href="#">Restaurantes</a></li>
                        <li><a href="#">Gastronomía</a></li>
                        <li><a href="#">rutas</a></li>
                    </ul>
                </nav>
                
                <div class="socialMedia">
<<<<<<< HEAD
                    <a href="../../admin/perfil.php">
=======
                    <a href="#">
>>>>>>> 9eeda649c777f0ed730aeb777882743a06071fec
                        <img src="../../../IMG/user.png" alt="">
                    </a>
                </div>
            </div>

        </div>
    </header>
=======
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
						<img src="../../../IMG/user.png" alt="">
					</a>
				</div>
			</div>

		</div>
	</header>

>>>>>>> Stashed changes
    <main>
        <div class="container__cover div__offset">

            <h1>Filtro de Hoteles</h1>

            <label for="currency-selector">Selecciona una moneda:</label>
            <select id="currency-selector">
                <option value="cordoba">Córdoba Nicaragüense (NIO)</option>
                <option value="dollar">Dólar Estadounidense (USD)</option>
                <option value="euro">Euro (EUR)</option>
                <!-- Agrega más monedas según sea necesario -->
            </select>

            <label for="number-search">Precio máximo en la moneda seleccionada:</label>
            <input type="number" id="number-search" placeholder="Precio máximo">

            <label for="keyword-search">Palabras clave:</label>
            <input type="text" id="keyword-search" placeholder="Palabras clave">

            <div id="filter-buttons">
                <button class="filter-button" data-filter="todos">Todos</button>
                <button class="filter-button" data-filter="campo">Campo</button>
                <button class="filter-button" data-filter="ciudad">Ciudad</button>
                <button class="filter-button" data-filter="volcan">Volcán</button>
                <!-- Agrega más botones con etiquetas correspondientes -->
            </div>

            <div id="product-container" class="content_img">
                <!-- Las imágenes se cargarán aquí -->
                <!-- Debes generar dinámicamente los productos desde PHP -->
            </div>
        </div>
        <!--Pie de paguina-->
        <footer>
            <h1>Este es el pie de paguina</h1>
            <h2>Lorem Impush</h2>
        </footer>
    </main>

    <a href="../PHP/cerrar_sesion.php" class="cerrar-sesion">Cerrar Sesión</a>
    <script src="../../../JS/menuAmburgesa.js"></script>
    <script src="../JS/sistemaFiltrado.js"></script>
    <script src="../JS/AJAX.js"></script>
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
			chatbot.href = "../../../HTML/chatbot.php";

			// Cambiar la URL para el enlace hoteles
			hoteles.href = "mostrar_producto.php";

			// Cambiar la URL para el enlace restaurantes
			restaurantes.href = "URL_si_sesion_iniciada.php";

			gastronomia.href = "URL_si_sesion_iniciada.php";

			museo.href = "URL_si_sesion_iniciada.php";

			rutas.href = "../../../HTML/rutas.php";

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
