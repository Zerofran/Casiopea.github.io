<?php
include '../../PHP/verificarRol_be.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--
    <link rel="stylesheet" href="styles.css">
-->
    <style>
      /* Estilo general del formulario */
      form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
      }

      /* Estilo de etiquetas y campos de entrada */
      label {
        display: block;
        margin-top: 10px;
      }

      input[type="text"],
      textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type="file"] {
        margin-top: 5px;
      }

      /* Estilo para el botón de enviar */
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }

      /* Estilo para el campo oculto */
      #campoOculto {
        display: none; /* Esto ocultará el campo oculto */
      }
    </style>

    <title>Subir Información del Negocio</title>
</head>
<body>
    <h3 id="hola"></h3><br>
    <h2>Subir Información del Negocio</h2>
    <form action="subir_informacion.php" method="POST" enctype="multipart/form-data">

        <label for="nombre">Nombre del Negocio:</label>
        <input type="text" name="nombre" required><br>

        <label for="descripcion">Descripción del Negocio:</label>
        <textarea name="descripcion" required></textarea><br>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" name="ubicacion" required><br>

        <label for="imagen">Imagen del Negocio:</label>
        <input type="file" name="imagen" accept="image/*" required><br>

        <h2>Sube mas imagenes para mas informacion visual</h2>
        <label for="imagen2">Sube una segunda imagen:</label>
        <input type="file" name="imagen2" accept="image/*"><br>
        <label for="imagen3">Una tercera imagen nunca esta de mas:</label>
        <input type="file" name="imagen3" accept="image/*"><br>
        <label for="imagen4">Muestra mas de tu negocio:</label>
        <input type="file" name="imagen4" accept="image/*"><br>

        <h2>El cliente debe de saber en que orarios atiendes</h2>
        <label for="horario">Horario de Atención:</label>
        <input type="text" name="horario"><br>

        <h2>tu numero es importante para un trato directo</h2>
        <label for="contacto">Información de Contacto:</label>
        <input type="text" name="contacto"><br>

        <!-- Otros campos relevantes -->
        <input type="submit" value="Enviar">
    </form>

<!--------------------------------Scripts para optener y dar valores------------------------------------>
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
            console.log("ID_Cargo: " + window.id_cargo);
            console.log("Usuario: " + window.usuario);
            console.log("ID_Usuario: " + window.id);
            saludo.textContent = "Hola "+ window.usuario + ", aqui puedes subir informacion sobre los servicios que ofreses";
        });
        
    </script>

</body>
</html>
