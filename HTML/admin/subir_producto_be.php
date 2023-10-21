<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $moneda = $_POST["moneda"]; // Captura la moneda seleccionada
    $tags = $_POST["tags"]; // Captura las etiquetas como un array

    $imagen = $_FILES["imagen"]["name"];
    $imagen_temporal = $_FILES["imagen"]["tmp_name"];
    $ruta_destino = '../../contenedor_img/' . $imagen; // Ruta actualizada

    if (move_uploaded_file($imagen_temporal, $ruta_destino)) {
        
        $conexion =  mysqli_connect("localhost", "root", "", "login_registro_db");

        if ($conexion->connect_error) {
            die("Error en la conexión a la base de datos: " . $conexion->connect_error);
        }

        // Convierte el array de etiquetas en una cadena para almacenar en la base de datos
        $tags_str = implode(",", $tags);

        $sql = "INSERT INTO productos (nombre, descripcion, precio, moneda, imagen, tags) VALUES ('$nombre', '$descripcion', $precio, '$moneda', '$ruta_destino', '$tags_str')"; // Almacena la moneda seleccionada

        if ($conexion->query($sql) === TRUE) {
            header("Location: mostrar_producto.php");
        } else {
            echo "Error al insertar el producto: " . $conexion->error;
        }

        $conexion->close();
    } else {
        echo "Error al subir la imagen.";
    }
}
?>
