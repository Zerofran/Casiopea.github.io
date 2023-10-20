<?php
// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (ajusta los valores según tu configuración)
    $conexion =  mysqli_connect("localhost", "root", "", "login_registro_db");

    // Verifica la conexión a la base de datos
    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    // Obtiene los datos del formulario
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $ubicacion = $_POST["ubicacion"];
    $imagen = $_FILES["imagen"]["name"];
    $horario = $_POST["horario"];
    $contacto = $_POST["contacto"];
    $usuario_id = $_POST["usuario_id"];

    // Ruta donde se almacenarán las imágenes (ajusta según tu configuración)
    $ruta_destino = '../../contenedor_img/' . $imagen;

    // Mueve la imagen al directorio de destino
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_destino)) {
        // Inserta los datos en la base de datos
        $sql = "INSERT INTO negocios (nombre, descripcion, ubicacion, imagen, horario, contacto, usuario_id) VALUES ('$nombre', '$descripcion', '$ubicacion', '$ruta_destino', '$horario', '$contacto', $usuario_id)";

        if ($conexion->query($sql) === TRUE) {
            echo "Información del negocio subida con éxito.";
        } else {
            echo "Error al subir la información del negocio: " . $conexion->error;
        }
    } else {
        echo "Error al subir la imagen.";
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
}
?>
