//---ESTE SCRIPT AYUDA A CONTROLAR EL SISTEMA RESPONSIVO Y DE LOGIN---//
//---COMPROBANDO EVENTOS---//
window.addEventListener('resize', anchoPagina);
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

//-------------------------------------------------------------------------//

//----CREACIÓN DE FUNCIONES----//
//--FUNCION QUE CORRIGE EL BUG DE INICIO DE LA PÁGINA--//
// Todas retornan un void//

function anchoPagina() {
    if (window.innerWidth > 850) {
        caja_trasera_login.style.display = "block";
        caja_trasera_registro.style.display = "block";
        contenedor_login_registro.style.left = "10px";
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
    if (window.innerWidth > 850) {
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

    if (window.innerWidth > 850) {

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

//----NOTAS PARA EL QUE REVISE MI CODIGO Y PARA MI----//
//antes de poner este comentario me ocurrio un bug considerado como muy raro para mi yo del pasado
//y es que tenia una imagen tan grande que el DOM no se cargaba y al llamar la funcion a secas
//pues rompia todo por que modificaba algo que no existia, me di cuenta luego de arrancarme los pelos
//por un dia,  por lo tanto si voy a poner una imagen seria bueno que no sobrepase el 1k como mucho
                                          
                                          //--ATTM: Francisco josue--//
//PD:CTL+G no guarda el codigo en Sublime text...
//--COMENTARIO NUMERO 2--//

//-------------------------------------------------------------------------//

