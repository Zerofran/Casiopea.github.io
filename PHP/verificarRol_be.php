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
$query = "SELECT id_cargo, usuario, id FROM usuarios WHERE correo = '$correo_encriptado'";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    echo 'Error en la consulta: ' . mysqli_error($conexion);
} else {
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila) {
        $id_cargo = $fila['id_cargo'];
        $usuario = $fila['usuario'];
        $id = $fila['id'];
        echo "<script>window.id_cargo = $id_cargo;</script>";
        echo "<script>window.usuario = '$usuario';</script>";
        echo "<script>window.id = $id;</script>";
    } else {
        echo 'No se encontró un usuario con el correo encriptado.';
    }
    mysqli_free_result($resultado);
}
mysqli_close($conexion);
?>