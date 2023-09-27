//---ESTE SCRIPT AYUDA A CONTROLAR EL SISTEMA RESPONSIVO Y DE LOGIN---//

//---COMPROBANDO EVENTOS---//
document.getElementById("btn__registrarse").addEventListener("click", registro);
document.getElementById("btn__iniciar-sesion").addEventListener("click", login);
window.addEventListener("load", anchoPagina);
window.addEventListener("beforeunload", anchoPagina);

//-------------------------------------------------------------------------//

//----DECLARACIÓN DE VARIABLES----//
var contenedor_login_registro = document.querySelector(".contenedor__login-registro");
var formulario_login = document.querySelector(".formulario__login");
var formulario_registro = document.querySelector(".formulario__registro");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_registro = document.querySelector(".caja__trasera-registro");
var estado = 0;


//aqui estoy intentando hacer que aparesca una alerta cuando
//el formulario esta bacio
var alerta = document.getElementById("alerta")
var btn_regis = document.getElementById("btn_regis")

var nombre = document.querySelector("#nombre");
var correo = document.querySelector("input[name='correo']");
var usuario = document.querySelector("input[name='usuario']");
var contrasena = document.querySelector("input[name='contrasena']");


//-------------------------------------------------------------------------//

//----CREACIÓN DE FUNCIONES----//
//--FUNCION QUE CORRIGE EL BUG DE INICIO DE LA PÁGINA--//
// Todas retornan un void//

function anchoPagina() {
    if (window.innerWidth > 840) {
        caja_trasera_login.style.display = "block";
        caja_trasera_registro.style.display = "block";
        //contenedor_login_registro.style.left = "10px";//
    } else {
        caja_trasera_registro.style.display = "block";
        caja_trasera_registro.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display = "none"; 
        contenedor_login_registro.style.left = "0px";
    }
}

//xxxxxxxxxxxxxxxxxxxxxxxxxxxxx//

//--FUNCION DE CONTROL DE LOGIN--//
function login() {

    if (window.innerWidth > 840) {

        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_registro.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";

    } else {

        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_registro.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

//--FUNCION DE CONTROL DE REGISTRO--//
function registro() {

    if (window.innerWidth > 840) {

        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_registro.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";

    } else {

        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_registro.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}

//-------------------------------------------------------------------------//

