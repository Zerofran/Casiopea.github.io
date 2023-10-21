<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por favor debes iniciar sesión")
            window.location = "../index.php"
        </script>
    ';
    session_destroy();
    die();
}

    $conexion = mysqli_connect("localhost", "root", "", "login_registro_db");

if (!$conexion) {
    die('Error en la conexión a la base de datos: ' . mysqli_connect_error());
}

$correo_encriptado = $_SESSION['usuario'];
// Realizar la consulta SQL para obtener id_cargo
$query = "SELECT id_cargo, usuario, id FROM usuarios WHERE correo = '$correo_encriptado'";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    echo 'Error en la consulta: ' . mysqli_error($conexion);
} else {
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila) {
        $id = $fila['id'];
    } else {
        echo 'No se encontró un usuario con el correo encriptado.';
    }
    mysqli_free_result($resultado);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $ubicacion = $_POST["ubicacion"];
    $imagen = $_FILES["imagen"]["name"];
    $horario = $_POST["horario"];
    $contacto = $_POST["contacto"];
    $usuario_id = $id;

    // Ruta donde se almacenarán las imágenes (ajusta según tu configuración)
    $ruta_destino = '../../contenedor_img/';

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_destino . $imagen)) {
        // Guarda las imágenes adicionales
        for ($i = 0; $i <= 3; $i++) {
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
