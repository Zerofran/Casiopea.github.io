<?php
//Verificando el rol de ususario y revisar que secio esta abierta
include '../../PHP/verificarRol_be.php';
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina principal</title>

	<!-- aqui se linquea hacia la hoja de estilos .css -->
	<link rel="stylesheet" type="text/css" href="../header_botones/css/subirProducto.css">

</head>

<body>
	<div>
		<h1 id="hola"></h1>
		<img src="" alt="foto de perfil" id="foto">

	</div>
	<h1 id="hola"></h1>
	<main>
	    <h2>Configuración de Usuario</h2>
	    <div id="Nombre_usuario">
	    <!-- Formulario para cambiar el nombre de usuario-->
		    <form action="update_settings.php" method="POST">
		        <label for="nuevo_usuario">Nuevo Nombre de Usuario:</label>
		        <input type="text" name="nuevo_usuario" required><br>
		        <input type="submit" value="Guardar Cambios">
		    </form>
	    </div>

	    <div id="Contrasena">
	    <!--Formulario para cambiar contraseña-->
		    <form action="update_settings.php" method="POST">
		        <label for="nueva_contrasena">Nueva Contraseña:</label>
		        <input type="password" name="nueva_contrasena" required><br>
		        <input type="submit" value="Guardar Cambios">
		    </form>
	    </div>

	    <div id="foto">
		    <!-- Formulario para cambiar la imagen de perfil -->
		    <form action="update_settings.php" method="POST" enctype="multipart/form-data">
		        <label for="nueva_imagen">Nueva Imagen de Perfil:</label>
		        <input type="file" name="nueva_imagen" accept="image/*" required><br>
		        <input type="submit" value="Cargar Imagen de Perfil">
		    </form>
	    </div>

	    <div id="cargos">
		    <h1>Convierte en administrador</h1>
		    <h3>esto te dara acceso a subir informacion sobre servisios que ofrescas</h3>
		    <form action="update_settings.php" method="POST">
		        <input type="number" name="nuevo_id_cargo" value="1"><br>
		        <input type="submit" value="Guardar Cambios">
		    </form>
	    </div>
    </main>

	<script type="text/javascript">
		const cargos = document.getElementById('cargos');
		const saludo = document.getElementById('hola');
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
	    if (window.id_cargo == 1) {
	    	console.log("se ocultan cosas: " + cargo);
	    	cargos.style.display = "none";
	    } else {
	    	console.log("todo normal: " + cargo);
	        cargos.style.display = "block";
	      }
	  });
		document.addEventListener('DOMContentLoaded', function () {
			console.log("prueba de los id y usuarios");
		    console.log("ID: " + window.id_cargo);
		    console.log("Usuario: " +window.usuario);
		    saludo.textContent = "Hola "+ window.usuario + ", !listo para actualizar tu perfil¡";
		});
	</script>
</body>
</html>
