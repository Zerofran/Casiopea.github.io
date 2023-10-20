<?php
session_start();

// Incluye la conexión a la base de datos
include 'conexion_be.php';

// Obtén los datos del formulario de manera segura
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

// Validación de campos obligatorios
if (empty($correo) || empty($contrasena)) {
    die("Por favor, complete todos los campos.");
}

// Aplicar hash y salting a la contraseña
$contrasena = hash('sha512', $contrasena);

// Consulta preparada para evitar la inyección SQL
$stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE correo = ? and contrasena = ?");
mysqli_stmt_bind_param($stmt, "ss", $correo, $contrasena);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {
    // Inicio de sesión exitoso
    $_SESSION['usuario'] = $correo;
    header("location: ../HTML/p_principal.php");
    exit;
} else {
    // Inicio de sesión fallido
    echo '<script>
        alert("Inicio de sesión fallido. El usuario no existe o las credenciales son incorrectas.");
        window.location = "../index.php";
    </script>';
    exit;
}

// Cerrar la consulta y la conexión
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>

 ?>