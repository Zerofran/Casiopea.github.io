<?php
// --- INCLUYENDO LA LLAVE ---
include 'conexion_be.php';

// Comprobar si el usuario está autenticado, por ejemplo, mediante una sesión.
// Puedes agregar lógica de autenticación aquí.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nuevo_usuario = $_POST['nuevo_usuario'];
    $nueva_contrasena = $_POST['nueva_contrasena'];
    $nuevo_id_cargo = $_POST['nuevo_id_cargo'];

    // Validar y procesar los cambios
    if (!empty($nuevo_usuario)) {
        // Actualizar el nombre de usuario en la base de datos
        $update_query = "UPDATE usuarios SET usuario = '$nuevo_usuario' WHERE id = {ID_DEL_USUARIO_ACTUAL}";
        mysqli_query($conexion, $update_query);
    }

    if (!empty($nueva_contrasena)) {
        // Hashear la nueva contraseña (asegúrate de usar un algoritmo seguro)
        $nueva_contrasena_hashed = hash('sha512', $nueva_contrasena);

        // Actualizar la contraseña en la base de datos
        $update_query = "UPDATE usuarios SET contrasena = '$nueva_contrasena_hashed' WHERE id = {ID_DEL_USUARIO_ACTUAL}";
        mysqli_query($conexion, $update_query);
    }

    if (!empty($nuevo_id_cargo)) {
        // Actualizar el ID de cargo en la base de datos
        $update_query = "UPDATE usuarios SET id_cargo = '$nuevo_id_cargo' WHERE id = {ID_DEL_USUARIO_ACTUAL}";
        mysqli_query($conexion, $update_query);
    }

    // Redirigir al usuario a la página de configuración con un mensaje de éxito
    header("Location: settings.html?success=true");
} else {
    // Redirigir al usuario a la página de configuración con un mensaje de error
    header("Location: settings.html?error=true");
}

mysqli_close($conexion);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Subir Información del Negocio</title>
</head>
<body>
    <h1>Subir Información del Negocio</h1>
    <form action="subir_informacion.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre del Negocio:</label>
        <input type="text" name="nombre" required><br>

        <label for="descripcion">Descripción del Negocio:</label>
        <textarea name="descripcion" required></textarea><br>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" name="ubicacion" required><br>

        <label for="imagen">Imagen del Negocio:</label>
        <input type="file" name="imagen" accept="image/*" required><br>

        <label for="horario">Horario de Atención:</label>
        <input type="text" name="horario"><br>

        <label for="contacto">Información de Contacto:</label>
        <input type="text" name="contacto"><br>

        <!-- Otros campos relevantes -->

        <!-- Campo oculto para almacenar el ID del usuario que sube la información -->
        <input type="hidden" name="usuario_id" value="ID_DEL_USUARIO_AQUI">

        <input type="submit" value="Subir Información">
    </form>
</body>
</html>
