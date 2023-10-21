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
    $ruta_destino = '../../contenedor_img/';

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_destino . $imagen)) {
        // Guarda las imágenes adicionales
        for ($i = 2; $i <= 4; $i++) {
            if (!empty($_FILES["imagen$i"]["name"])) {
                $imagenNombre = $_FILES["imagen$i"]["name"];
                if (move_uploaded_file($_FILES["imagen$i"]["tmp_name"], $ruta_destino . $imagenNombre)) {
                    // Inserta los datos en la base de datos
                    $sql = "INSERT INTO negocios (nombre, descripcion, ubicacion, imagen, horario, contacto, usuario_id) VALUES ('$nombre', '$descripcion', '$ubicacion', '$imagen', '$horario', '$contacto', $usuario_id)";

                    if ($conexion->query($sql) === TRUE) {
                        echo "Información del negocio subida con éxito.";
                    } else {
                        echo "Error al subir la información del negocio: " . $conexion->error;
                    }

                    // Ahora, inserta las imágenes adicionales en la misma fila del negocio
                    $negocio_id = mysqli_insert_id($conexion);
                    $sqlImagenes = "UPDATE negocios SET imagen$i = '$imagenNombre' WHERE id = $negocio_id";
                    if ($conexion->query($sqlImagenes) !== TRUE) {
                        echo "Error al subir la imagen adicional $i: " . $conexion->error;
                    }
                } else {
                    echo "Error al subir la imagen adicional $i.";
                }
            }
        }
    } else {
        echo "Error al subir la imagen principal.";
    }

    $conexion->close();
}
?>
