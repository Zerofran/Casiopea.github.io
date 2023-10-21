<?php
include '../../PHP/verificarRol_be.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Subir Información del Negocio</title>
</head>
<body>
    <h3 id="hola"></h3>
    <h1>Subir Información del Negocio</h1>
    <form action="subir_informacion.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre del Negocio:</label>
        <input type="text" name="nombre" required><br>

        <label for="descripcion">Descripción del Negocio:</label>
        <textarea name="descripcion" required></textarea><br>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" name="ubicacion" required><br>

        <label for="imagen">Imagen del Negocio:</label>
        <input type="file" name="imagen" accept="image/*" required><br>

        <label for="horario">Horario de Atención:</label>
        <input type="text" name="horario"><br>

        <label for="contacto">Información de Contacto:</label>
        <input type="text" name="contacto"><br>

        <!-- Otros campos relevantes -->

        <!-- Campo oculto para almacenar el ID del usuario que sube la información -->
        <input type="hidden" name="usuario_id" value="ID_DEL_USUARIO_AQUI">

        <input type="submit" value="Subir Información">
    </form>

<!--Scripts-->
<script type="text/javascript">
        const cargos = document.getElementById('cargos');
        const saludo = document.getElementById('hola');
      // En cualquier otro script en la misma página
    //se puede llamar de manera normal pero estoe es por si el php se ejecuta muy tarde
      function waitForCargo() {
        return new Promise((resolve) => {
          if (window.id_cargo !== undefined) {
            resolve(window.id_cargo);
          } else {
            setTimeout(() => waitForCargo().then(resolve), 100);
          }
        });
      }

      waitForCargo().then((cargo) => {
        console.log("El valor de id_cargo es: " + cargo);
        // Puedes realizar acciones que dependan de cargo aquí
        if (window.id_cargo == 1) {
            console.log("se ocultan cosas: " + cargo);
            cargos.style.display = "none";
        } else {
            console.log("todo normal: " + cargo);
            cargos.style.display = "block";
          }
      });
        document.addEventListener('DOMContentLoaded', function () {
            console.log("prueba de los id y usuarios");
            console.log("ID: " + window.id_cargo);
            console.log("Usuario: " +window.usuario);
            saludo.textContent = "Hola "+ window.usuario + ", aqui puedes subir informacion sobre los servicios que ofreses";
        });
    </script>
</body>
</html>
