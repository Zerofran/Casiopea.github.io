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
	<title>Chat de Ayuda</title>

	<!-- aqui se linquea hacia la hoja de estilos .css -->
	<link rel="stylesheet" type="text/css" href="../../CSS/chatbot.css">

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

			<div class="menu"> 
				<nav>
					<ul>
						<li><a href="chatbot.php">Preguntame!</a></li>
						<li><a href="Hoteles.php" class="btn_axes">Hoteles</a></li>
						<li><a href="#">Restaurantes</a></li>
						<li><a href="#">Gastronomía</a></li>
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
	<main>
		<div id="chat_container">
  			<h1 id="HelpTitle">¿En qué puedo ayudarte?</h1>
			  <div id="chatbox">
				<p id="output"></p>
			</div>
 			<!--  Esta es la parte del texto que corresponde al chatbot con la api de OpenAI -->
      		<input type="text" placeholder="Escribe tus dudas" id="prompt">
      		<button id="generate">Generate</button>
		</div>
	</main>
  <script src="../../JS/chatbot.js"></script>
</body>
</html>