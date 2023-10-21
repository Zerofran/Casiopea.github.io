<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = mysqli_connect("localhost", "root", "", "login_registro_db");
    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $ubicacion = $_POST["ubicacion"];
    $imagen = $_FILES["imagen"]["name"];
    $horario = $_POST["horario"];
    $contacto = $_POST["contacto"];
    $usuario_id = $_POST["usuario_id"];

    // Ruta donde se almacenarán las imágenes (ajusta según tu configuración)
    $ruta_destino = '../../contenedor_img/' . $imagen;

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_destino)) {
        $sql = "INSERT INTO negocios (nombre, descripcion, ubicacion, imagen, horario, contacto, usuario_id) VALUES ('$nombre', '$descripcion', '$ubicacion', '$ruta_destino', '$horario', '$contacto', $usuario_id)";

        if ($conexion->query($sql) === TRUE) {
            echo "Información del negocio subida con éxito.";
        } else {
            echo "Error al subir la información del negocio: " . $conexion->error;
        }

        // Guarda las imágenes adicionales
        for ($i = 2; $i <= 4; $i++) {
            if (!empty($_FILES["imagen$i"]["name"])) {
                $imagenNombre = $_FILES["imagen$i"]["name"];
                $rutaDestino = '../../contenedor_img/' . $imagenNombre;
                if (move_uploaded_file($_FILES["imagen$i"]["tmp_name"], $rutaDestino)) {
                    $sql = "INSERT INTO imagenes_adicionales (negocio_id, imagen) VALUES (LAST_INSERT_ID(), '$rutaDestino')";
                    if ($conexion->query($sql) !== TRUE) {
                        echo "Error al subir la imagen adicional $i: " . $conexion->error;
                    }
                } else {
                    echo "Error al subir la imagen adicional $i.";
                }
            }
        }
    } else {
        echo "Error al subir la imagen.";
    }

    $conexion->close();
}
?>
