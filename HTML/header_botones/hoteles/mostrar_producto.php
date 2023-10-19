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
    <link rel="stylesheet" href="../css/mostrarProducto.css">
    <title>Filtro de Hoteles</title>
</head>
<body>
    <!--HEADER - MENU-->

    <header>
        <div class="container__header">
            <div class="logo">
                <a href="../../../HTML/p_principal.php">
                    <img src="../../../IMG/logo.png" alt="">
                </a>
            </div>

            <!-- Agregar aquí el botón de menú hamburguesa -->
            <div class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <!-- Fin del botón de menú hamburguesa -->

            <div class="menu"> 
                <nav>
                    <ul>
                        <li><a href="#" class="btn_axes">Hoteles</a></li>
                        <li><a href="#">Restaurantes</a></li>
                        <li><a href="#">Gastronomía</a></li>
                        <li><a href="#">rutas</a></li>
                    </ul>
                </nav>
                
                <div class="socialMedia">
                    <a href="#">
                        <img src="../../../IMG/user.png" alt="">
                    </a>
                </div>
            </div>

        </div>
    </header>
    <main>
        <div class="container__cover div__offset">

            <h1>Filtro de Hoteles</h1>

            <label for="currency-selector">Selecciona una moneda:</label>
            <select id="currency-selector">
                <option value="cordoba">Córdoba Nicaragüense (NIO)</option>
                <option value="dollar">Dólar Estadounidense (USD)</option>
                <option value="euro">Euro (EUR)</option>
                <!-- Agrega más monedas según sea necesario -->
            </select>

            <label for="number-search">Precio máximo en la moneda seleccionada:</label>
            <input type="number" id="number-search" placeholder="Precio máximo">

            <label for="keyword-search">Palabras clave:</label>
            <input type="text" id="keyword-search" placeholder="Palabras clave">

            <div id="filter-buttons">
                <button class="filter-button" data-filter="todos">Todos</button>
                <button class="filter-button" data-filter="campo">Campo</button>
                <button class="filter-button" data-filter="ciudad">Ciudad</button>
                <button class="filter-button" data-filter="volcan">Volcán</button>
                <!-- Agrega más botones con etiquetas correspondientes -->
            </div>

            <div id="product-container" class="content_img">
                <!-- Las imágenes se cargarán aquí -->
                <!-- Debes generar dinámicamente los productos desde PHP -->
            </div>
        </div>
        <!--Pie de paguina-->
        <footer>
            <h1>Este es el pie de paguina</h1>
            <h2>Lorem Impush</h2>
        </footer>
    </main>

    <a href="../PHP/cerrar_sesion.php" class="cerrar-sesion">Cerrar Sesión</a>
    <script src="../JS/sistemaFiltrado.js"></script>
    <script src="../JS/AJAX.js"></script>

</body>
</html>
