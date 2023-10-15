<?php 
	session_start();

	/*---INCLUYENDO LA LLAVE---*/
	include 'conexion_be.php';

	/*---DECLARANDO VARIABLES---*/
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];


	if (empty($correo) or empty($contrasena)) {
	    $camposFaltantes = array();

	    if (empty($correo)) {
	        $camposFaltantes[] = "correo";
	    }

	    if (empty($contrasena)) {
	        $camposFaltantes[] = "contraseña";
	    }

	    $mensaje = "Los siguientes campos no fueron rellenados: " . implode(", ", $camposFaltantes);

	    echo '
	        <script>
	            alert("' . $mensaje . '")
	            window.location = "../index.php"
	        </script>
	    ';
	    exit();
	}



	//----ENCRIPTADO BASICO DE LA CONTRASEÑA Y CORREO----//
	$correo = hash('sha512', $correo);
	$contrasena = hash('sha512', $contrasena);
	/*-----------------------------------------------------*/


	$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' ");

	if (mysqli_num_rows($validar_login) > 0){

		$_SESSION['usuario'] = $correo;
		header("location: ../HTML/p_principal.php");
		exit;

	}else {
		echo'
			<script>
				alert("El usuario no existe, por favor cree una cuenta")
				window.location = "../index.php"
			</script>
		'; 
		exit;
	}



 ?>