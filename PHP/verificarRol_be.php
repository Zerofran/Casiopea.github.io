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
// Conexión a la base de datos (ajusta los valores según tu configuración)
    /*---INCLUYENDO LA LLAVE---*/
    include 'conexion_be.php';

if (!$conexion) {
    die('Error en la conexión a la base de datos: ' . mysqli_connect_error());
}
$correo_encriptado = $_SESSION['usuario'];
// Realizar la consulta SQL para obtener id_cargo
$query = "SELECT id_cargo FROM usuarios WHERE correo = '$correo_encriptado'";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    echo 'Error en la consulta: ' . mysqli_error($conexion);
} else {
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila) {
        $id_cargo = $fila['id_cargo'];
        echo "<script>window.id_cargo = $id_cargo;</script>";
        // Ahora $id_cargo contiene el valor de id_cargo correspondiente al usuario con el correo encriptado
        //echo "El id_cargo es: $id_cargo";

        // Puedes usar $id_cargo en tu código PHP o JavaScript según tus necesidades
    } else {
        echo 'No se encontró un usuario con el correo encriptado.';
    }
    mysqli_free_result($resultado);
}
mysqli_close($conexion);
?>