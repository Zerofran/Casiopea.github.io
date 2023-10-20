<?php

//-------------------------REVISADO-----------------------------//

// --- INCLUYENDO LA LLAVE ---
//include '../../PHP/conexion_be.php';
$conexion =  mysqli_connect("localhost", "root", "", "login_registro_db");

//inicio de secion
session_start();

//optener dato encriptado
$correo_encriptado = $_SESSION['usuario'];
// Realizar la consulta SQL para obtener id de usuario usando como condicion la coincidencia de correos
$query = "SELECT id FROM usuarios WHERE correo = '$correo_encriptado'";

//revisar si hay match de datos
$resultado = mysqli_query($conexion, $query);

//Condiciones a las que se somete el match
if (!$resultado) {
    echo 'Error en la consulta: ' . mysqli_error($conexion);
} else {
    //opteniendo el array con el que se hizo match
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila) {
        $id = $fila['id'];
        //guardar en una variable para ser recuperada por un js
        echo "<script>window.id = $id;</script>";
        echo "<script>window.console.log(id);</script>";
    } else {
        echo 'No se encontró un usuario con el correo encriptado.';
    }
    mysqli_free_result($resultado);
}
//----------------------------------------------------------------------------//

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    //$vieja_contrasena = $_POST['vieja_contrasena'];
    $nuevo_usuario = $_POST['nuevo_usuario'];
    $nueva_contrasena = $_POST['nueva_contrasena'];
    $nuevo_id_cargo = $_POST['nuevo_id_cargo'];
    $nueva_foto = $_POST['nueva_imagen'];

//--implementar la pregunta de contrasena anterior para validad al ususario--//
    // Validar y procesar los cambios
    if (!empty($nuevo_usuario)) {
        // Actualizar el nombre de usuario en la base de datos
        $update_query = "UPDATE usuarios SET usuario ='$nuevo_usuario' WHERE correo = '$correo_encriptado'";
        mysqli_query($conexion, $update_query);
    }
    if (!empty($nueva_contrasena)) {
        // Hashear la nueva contraseña (asegúrate de usar un algoritmo seguro)
        $nueva_contrasena_hashed = hash('sha512', $nueva_contrasena);
        // Actualizar la contraseña en la base de datos
        $update_query = "UPDATE usuarios SET contrasena = '$nueva_contrasena_hashed' WHERE correo = '$correo_encriptado'";
        mysqli_query($conexion, $update_query);
    }
    if (!empty($nuevo_id_cargo)) {
        // Actualizar el ID de cargo en la base de datos
        $update_query = "UPDATE usuarios SET id_cargo = '$nuevo_id_cargo' WHERE correo = '$correo_encriptado'";
        mysqli_query($conexion, $update_query);
    }
    if (!empty($nueva_foto)) {
        // Actualizar la foto de perfil
        $update_query = "UPDATE usuarios SET imagen_perfil ='$nueva_foto' WHERE correo = '$correo_encriptado'";
        mysqli_query($conexion, $update_query);
    }
    // Redirigir al usuario a la página de configuración con un mensaje de éxito
    header("Location: ajustes.php?success=true");

} else {
    // Redirigir al usuario a la página de configuración con un mensaje de error
    header("Location: ajustes.php?error=true");
}

mysqli_close($conexion);
?>
