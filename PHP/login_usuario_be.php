<?php 
	session_start();
<<<<<<< HEAD
=======

>>>>>>> 9eeda649c777f0ed730aeb777882743a06071fec
	/*---INCLUYENDO LA LLAVE---*/
	include 'conexion_be.php';

	/*---DECLARANDO VARIABLES---*/
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];

<<<<<<< HEAD
=======

>>>>>>> 9eeda649c777f0ed730aeb777882743a06071fec
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

<<<<<<< HEAD
=======


>>>>>>> 9eeda649c777f0ed730aeb777882743a06071fec
	//----ENCRIPTADO BASICO DE LA CONTRASEÑA Y CORREO----//
	$correo = hash('sha512', $correo);
	$contrasena = hash('sha512', $contrasena);
	/*-----------------------------------------------------*/

	$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' ");

//esta es la parte que deja entrar a la web a la persona asi que verificar que no este comentada
<<<<<<< HEAD
// Después de verificar el inicio de sesión exitoso
	if (mysqli_num_rows($validar_login) > 0) {
	    $_SESSION['usuario'] = $correo;
	    header("location: ../HTML/p_principal.php");
	    exit;
	} else {
	    // Si el inicio de sesión falla, muestra un mensaje de error
	    echo '
	        <script>
	            alert("El usuario no existe, por favor cree una cuenta")
	            window.location = "../index.php"
	        </script>
	    '; 
	    exit;
	}

=======
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


>>>>>>> 9eeda649c777f0ed730aeb777882743a06071fec
//---Comprobando ROl de ususarios---//
/*
//verificamos si el usuario a pasado la primera prueba, la de autenticidad de los datos
	if ($validar_login) {
	    $usuario = mysqli_fetch_assoc($validar_login); // Obtenemos los datos del usuario en forma de array

	    //ya que la paso verificamos el array anterior y inspeccionamos una parte de la tabla
	    //para ver si es administrador o cliente
	    if ($usuario) {
<<<<<<< HEAD
			if ($usuario['id_cargo'] == 1) { //administrador
			    header("location: ../HolaAdmin.php");
			} else if ($usuario['id_cargo'] == 2) { //Cliente
			   	header("location: ../HolaCliente.php");
			}else {
=======
	        if ($usuario['id_cargo'] == 1) { //administrador
	            header("location: ../HolaAdmin.php");
	        } else if ($usuario['id_cargo'] == 2) { //Cliente
	            header("location: ../HolaCliente.php");
	          //si el usuario no tiene id_cargo por la razon que sea entonses se le niega la entrada
	        } else {
>>>>>>> 9eeda649c777f0ed730aeb777882743a06071fec
	            echo '
	                <script>
	                    alert("El usuario no existe, por favor cree una cuenta")
	                    window.location = "../index.php"
	                </script>
	            ';
	            exit;
	        }
		//si ninguo de los datos coincide entonses el usuario no existe o hay problemas en el array debuelto
	    } else {
	        echo '
	            <script>
	                alert("El usuario no existe, por favor cree una cuenta")
	                window.location = "../index.php"
	            </script>
	        ';
	        exit;
	    }
	//por si hubo errores en la llave
	} else {
	    echo 'Hubo un error en la consulta: ' . mysqli_error($conexion);
	}
*/
//lo anterior fue una prueba nada mas

 ?>