<?php

	/*---INCLUYENDO LA LLAVE---*/
	include 'conexion_be.php';

	/*---DECLARANDO VARIABLES---*/
	/*-la recepción de los datos será por métodos POST-*/
	$nombre_completo = $_POST['nombre_completo'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];



	if (empty($nombre_completo) or empty($correo) or empty($usuario) or empty($contrasena)) {
		echo '
			<script>
				alert("Uno o mas espacios no fueron rellenados")
				window.location = "../index.php"
			</script>
		';
		exit();

	}
	

	//----ENCRIPTADO BASICO DE LA CONTRASEÑA Y CORREO----//
	$correo = hash('sha512', $correo);
	$contrasena = hash('sha512', $contrasena);

	/*-----------------------------------------------------*/


	/*---ASIGNANDO VALORES DE VARIABLES A LA TABLA DE MySQL---*/
	/*---abriendo la libreta---*/
	$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

	//----VERIFICAR QUE EL CORREO Y USUARIO NO SE REPITA----//
	$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
	$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

	if (mysqli_num_rows($verificar_correo) > 0){
		echo '
			<script>
				alert("este correo ya a sido registrado, prueva con otro diferente o intenta logearte")
				window.location = "../index.php"
			</script>
		';
		exit();
	}

	if (mysqli_num_rows($verificar_usuario) > 0){
		echo '
			<script>
				alert("este usuario ya a sido registrado, prueva con otro diferente o introduce un nuevo caracter")
				window.location = "../index.php"
			</script>
		';
		exit();
	}

	//--SI LOS IF SON FALSE O 0 ENTONSES ESTA PARTE SE EJECUTA--//

	$ejecutar = mysqli_query($conexion, $query);
	/*-----------------------------------------------------*/

	if ($ejecutar) {
		echo '
			<script>
				//--aqui debe de ir una alerta para indicar que se a registrado correctamente--//
				window.location = "../index.php"
				alert("Su cuenta a sido creada exitosamente, sus datos son encriptados para mayor seguridad")
			</script>
		';
	}else {
		echo "Error al registrar usuario: " . mysqli_error($conexion);
	}


	mysqli_close($conexion);







//----NOTAS A TOMAR EN CUENTA PARA MI MISMO----//

/*--enserio revisa los punto y coma antes de compilar el codigo--*/
/*--todo comentario fuera de las llaves de php es considerado una etiqueta de texto*/
//--el tipo de encriptado sha512 no es muy seguro ya que logre desencriptarlo facilmente, talves no me costo por que en su tiempo me deique a la criptografia pero ha que crear un mejor sistema de momento para no atrasar el proyecto usare el encriptado por defecto--//


//----NOTAS PARA EL QUE REVISE MI CODIGO----//

/*--Hola soy Fran el programador del grupo si estas leyendo mi codigo considera que soy novato en esto del sesarrollo web y no critiques tan duro mi codigo, si ves que trabajo un poco limpio y etiquetando todo con comentarios es por que apriendo los lenguajes mietras hago esto asi dijiero mejor la informacion, no soy novato del todo si notas cierto orden en los script es por que antes cree un videojuego con conocimiento  cero del motor asi que no es la primera ves que hago algo sin saber absolutamente nada 0_0, por cierto deje comentarios como estos en otros scripts este es el comentario numero 1 */

							//--ATTM: Francisco josue--//

?>