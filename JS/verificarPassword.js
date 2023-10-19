// Esta función se ejecutará cuando el usuario ingrese algo en el campo de correo en el formulario de inicio de sesión.
function validarCorreoLogin(correoInput) {
    var correoValido = /^[\p{L}0-9._%+\-\p{L}]+@(gmail|hotmail)\.(com|net|ni|es|edu\.ni|uk|ca|jp|ru|au|br|de|fr|gov|int|mil|org|cn)$/u;
    var estadoCorreo = correoInput.parentElement.querySelector(".estado-correo-login");
    var botonLogin = document.getElementById("login-button");

    if (correoInput.value === "") {
        estadoCorreo.textContent = "";
        botonLogin.removeAttribute("disabled"); // Habilitar el botón
        botonLogin.style.backgroundColor = ""; // Restablecer el color de fondo
    } else if (correoValido.test(correoInput.value)) {
        estadoCorreo.style.color = "green";
        estadoCorreo.textContent = "Correo válido";
        botonLogin.removeAttribute("disabled"); // Habilitar el botón
        botonLogin.style.backgroundColor = ""; // Restablecer el color de fondo
    } else {
        estadoCorreo.style.color = "red";
        estadoCorreo.textContent = "Correo no válido";
        botonLogin.setAttribute("disabled", "true"); // Deshabilitar el botón
        botonLogin.style.backgroundColor = "red"; // Cambiar el color de fondo a rojo
    }

    //falta poner una alerta temprana por si no llena todos los campos pero
}


function validarCorreoRegistro(correoInput) {
    var correoValido = /^[\p{L}0-9._%+\-\p{L}]+@(gmail|hotmail)\.(com|net|ni|es|edu\.ni|uk|ca|jp|ru|au|br|de|fr|gov|int|mil|org|cn)$/u;
    var estadoCorreo = correoInput.parentElement.querySelector(".estado-correo-registro");
    var botonRegistro = document.getElementById("registro-button");

    if (correoInput.value === "") {
        estadoCorreo.textContent = "";
        botonRegistro.removeAttribute("disabled"); // Habilitar el botón
        botonRegistro.style.background = "#46A2FD"; // Restablecer el color de fondo
    } else if (correoValido.test(correoInput.value)) {
        estadoCorreo.style.color = "blue";
        estadoCorreo.textContent = "Correo válido";
        botonRegistro.removeAttribute("disabled"); // Habilitar el botón
        botonRegistro.style.background = "#46A2FD"; // Restablecer el color de fondo
    } else {
        estadoCorreo.style.color = "red";
        estadoCorreo.textContent = "Correo no válido";
        botonRegistro.setAttribute("disabled", "true"); // Deshabilitar el botón
        botonRegistro.style.background = "red"; // Cambiar el color de fondo a rojo
    }
}

// Declarar las variables en un ámbito más amplio
var nombreInput, correoInput, usuarioInput, contrasenaInput, termsCheckbox;

function listo(formulario) {
    nombreInput = document.getElementById("nombre");
    correoInput = document.getElementById("correo");
    usuarioInput = document.getElementById("usuario");
    contrasenaInput = document.getElementById("password_registro");
    termsCheckbox = document.getElementById("terminos");
    var estadoCorreo = correoInput.parentElement.querySelector(".estado-listo-registro");
    
    // Verificar si todos los campos, incluido el checkbox, están vacíos
    if (
        nombreInput.value === "" &&
        correoInput.value === "" &&
        usuarioInput.value === "" &&
        contrasenaInput.value === "" &&
        !termsCheckbox.checked
    ) {
        // Todos los campos están vacíos, mostrar "Faltan más campos por llenar" en rojo
        estadoCorreo.style.color = "red";
        estadoCorreo.textContent = "";
    } else if (
        nombreInput.value !== "" &&
        correoInput.value !== "" &&
        usuarioInput.value !== "" &&
        contrasenaInput.value !== "" &&
        termsCheckbox.checked
    ) {
        // Todos los campos están llenos, mostrar "Listo" en azul
        estadoCorreo.style.color = "green";
        estadoCorreo.textContent = "Listo";
    } else {
        // Al menos un campo está vacío o el checkbox no está marcado, mostrar mensaje de "Faltan más campos por llenar" en rojo
        estadoCorreo.style.color = "red";
        estadoCorreo.textContent = "Faltan más campos por llenar";
    }
}

//desactivar esta sona si se desea testear el estado de los imput y checkbox
//y ver que campos estan llenos y basios
/*
document.addEventListener("keydown", function(event) {
    if (event.ctrlKey && event.shiftKey && event.key === "Q") {
        var mensaje = "Campos llenos:\n";
        
        if (nombreInput && nombreInput.value !== "") {
            mensaje += "- Nombre y apellido\n";
        }
        
        if (correoInput && correoInput.value !== "") {
            mensaje += "- Correo electrónico\n";
        }
        
        if (usuarioInput && usuarioInput.value !== "") {
            mensaje += "- Usuario\n";
        }
        
        if (contrasenaInput && contrasenaInput.value !== "") {
            mensaje += "- Contraseña\n";
        }
        
        if (termsCheckbox && termsCheckbox.checked) {
            mensaje += "- Términos y condiciones\n";
        }
        
        alert(mensaje);
    }
});
*/

