<?php 

    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '

            <script>
                alert("Por favor debes inciar sesion")
                window.location = "../index.php"
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Producto</title>
    <link rel="stylesheet" type="text/css" href="../css/subirProducto.css">
</head>
<body>
    <h1>Subir Producto</h1>
    <div>
        <form action="subir_producto_be.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" name="nombre" required><br>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea><br>

            <label for="precio">Precio:</label>
            <input type="number" name="precio" required><br>

            <label for="moneda">Moneda:</label>
            <select name="moneda">
                <option value="cordoba">Córdoba Nicaragüense (NIO)</option>
                <option value="dollar">Dólar Estadounidense (USD)</option>
                <option value="euro">Euro (EUR)</option>
                <!-- Agrega más monedas según sea necesario -->
            </select><br>

            <label for="imagen">Imagen del Producto:</label>
            <input type="file" name="imagen" accept="image/*" required><br>

            <label for="tags">Tags:</label><br>
            <input type="checkbox" name="tags[]" value="campo"> Campo <br>
            <input type="checkbox" name="tags[]" value="volcan"> Volcán <br>
            <input type="checkbox" name="tags[]" value="ciudad"> Ciudad <br>
            <!-- Agrega más tags con sus checkboxes según sea necesario -->

            <!-- Puedes agregar más campos aquí según tus necesidades, como condición, marca, etc. -->

            <input type="submit" value="Subir Producto">
        </form>
    </div>
</body>
</html>
