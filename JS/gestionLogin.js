document.addEventListener("DOMContentLoaded", function () {
    // Obtener todas las etiquetas <a> que quieres cambiar
    const chatbot = document.getElementById("chatbot");
    const hoteles = document.getElementById("hoteles");
    const restaurantes = document.getElementById("restaurantes");
    const gastronomia = document.getElementById("gastronomia");
    const museo = document.getElementById("museo");
    const rutas = document.getElementById("rutas"); 
    const ajustes = document.getElementById("ajustes");

    // Verificar el valor de urlDestino
    var urlDestino = "<?php echo $urlDestino; ?>";

    if (urlDestino === "1true") {
        // Cambiar la URL para el enlace chatbot
        chatbot.href = "chatbot.php";

        // Cambiar la URL para el enlace hoteles
        hoteles.href = "../HTML/header_botones/hoteles/mostrar_producto.php";

        // Cambiar la URL para el enlace restaurantes
        restaurantes.href = "URL_si_sesion_iniciada.php";

        gastronomia.href = "URL_si_sesion_iniciada.php";

        museo.href = "URL_si_sesion_iniciada.php";

        rutas.href = "rutas.php";

        ajustes.href = "admin/ajustes.php";


    } else if (urlDestino === "0false") {
        alert('se requiere una cuenta para permisos superiores')
        // Cambiar la URL para el enlace chatbot
        chatbot.href = "../index.php";

        // Cambiar la URL para el enlace hoteles
        hoteles.href = "../index.php";

        // Cambiar la URL para el enlace restaurantes
        restaurantes.href = "../index.php";

        gastronomia.href = "../index.php";

        museo.href = "../index.php";

        rutas.href = "../index.php";	

        ajustes.href = "admin/ajustes.php";	    
    }
});