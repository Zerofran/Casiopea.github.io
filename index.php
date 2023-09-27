<?php 

	session_start();

	if (isset($_SESSION['usuario'])) {
		header("location: HTML/p_principal.php");
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login y registro - Nica destiny</title>

	<!-- aqui se linquea hacia la hoja de estilos .css -->
	<link rel="stylesheet" type="text/css" href="CSS/style_login_1.css">

</head>
<body>

	<main>
		<div class="contenedor__todo">

			<div class="caja__trasera">

				<!-- aqui se crean las cajas traseras de login y registro que muestran las opciones mencionadas-->
				<div class="caja__trasera-login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>iniciar sesión para entrar en la paguina</p>
					<button id="btn__iniciar-sesion">inciar sesión</button>
				</div>

				<div class="caja__trasera-registro">
					<h3>¿Aun no tienes una cuenta?</h3>
					<p>Regístrate para que puedas iniciar sesión</p>
					<button id="btn__registrarse">Regístrate</button>
				</div>

			</div>

			<!-- Formulario de login y registro -->
			<!--Esta es la parte que permite logearse o registrarte-->

			<div class="contenedor__login-registro">

				<!-- ----LOGIN---- -->
				<form action = "PHP/login_usuario_be.php" class="formulario__login" method="POST">

					<h2>Inciar sesión</h2>
					<input type="text" placeholder="Correo electronico" name="correo">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<a href="">¿Olvidaste tu contraseña?</a> <br>
					<button>Entrar</button>
					
				</form>

				<!-- ----REGISTRO---- -->
				<!-- -el envio de los datos sera por metodo POST- -->

				<form action = "PHP/registro_usuario_be.php" class="formulario__registro" method="POST">
					
					<h2>Regístrarse</h2>
					<input type="text" placeholder="Nombre y apellido" name = "nombre_completo" id="nombre">
					<input type="text" placeholder="Correo electronico" name = "correo">
					<input type="text" placeholder="Usuario" name = "usuario">
					<input type="password" placeholder="Contraseña" name = "contrasena">
					<label>
						<table>
							<tr>
								<label>
									<td><input class="formulario__terminos" id="terminos" type="checkbox" name="check"> </td>
									<td class="terminos"><h3>¿hacepta los terminos y condiciones?</h3></td>
								</label>
							</tr>
						</table>
					</label> 
					<button>Registrarse</button>
				</form>

			</div>
		</div>
	</main>

	<script type="text/javascript" src="JS/script1.js"></script>
	
</body>
</html>