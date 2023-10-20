<?php
$conexion = mysqli_connect("localhost", "root", "", "login_registro_db");

if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<div class='box_img' data-price='" . $fila["precio"] . "' data-currency='" . $fila["moneda"] . "' data-tags='" . $fila["tags"] . "'>";
        echo "<img src='" . $fila["imagen"] . "' alt='" . $fila["nombre"] . "'>";
        echo "<h2>" . $fila["nombre"] . "</h2>";
        echo "<p>" . $fila["descripcion"] . "</p>";
        echo "<p>Precio: " . $fila["precio"] . " " . $fila["moneda"] . "</p>";
        echo "<a href='comprar.php?id=" . $fila["id"] . "'>Comprar</a>";
        echo "</div>";
    }
} else {
    echo "No hay productos disponibles.";
}

$conexion->close();
?>

