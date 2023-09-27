
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {

	nombre = /^[a-zÁ-ÿ\s]{1,40}$/, //Letras y espacios, pueden llevar acentos.
	correo = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	usuario = /^[a-zA-Z0-9\_\-]{4,16}$/, //letras, numeros, guin y guion_bajo
	contrasena = /^.{4,12}/, // limitado a 4 y 12 digitos como mucho

}