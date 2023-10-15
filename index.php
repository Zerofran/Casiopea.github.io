<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login y registro - Nica destiny</title>

    <link rel="stylesheet" type="text/css" href="CSS/style_login_1.css">

</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <!-- Cajas traseras de login y registro -->
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Iniciar sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-registro">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrate</button>
                </div>
            </div>

            <div class="contenedor__login-registro">
                <!-- Formulario de login y registro -->

				<!-- LOGIN -->
				<form name="FormularioLogin" action="PHP/login_usuario_be.php" class="formulario__login" method="POST">
				    <h2>Iniciar sesión</h2>
				    <input type="text" placeholder="Correo electrónico" name="correo" id="correo_login" oninput="validarCorreoLogin(this);" required>
				    <span id="correoLoginValidacion" class="validacion"></span>
				    <!--Texto que valida la contraseña insertada-->
				    <div class="estado-correo-login" style="color: red;"></div>
				    <!------------------------------------------------------------>

				    <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena" required>
				    <span id="contrasenaLoginValidacion" class="validacion"></span>
				    <a href="">¿Olvidaste tu contraseña?</a> <br>
				    <button id="login-button">Entrar</button>
				</form>

                <!-- REGISTRO -->
				<form name="FormularioRegistro" action="PHP/registro_usuario_be.php" class="formulario__registro" method="POST">
				    <h2>Registrarse</h2>

				    <input type="text" placeholder="Nombre y apellido" name="nombre_completo" id="nombre" required oninput="listo();">

				    <input type="text" placeholder="Correo electrónico" name="correo" id="correo" required oninput="listo(); validarCorreoRegistro(this);">
				    <div class="estado-correo-registro" style="color: red;"></div>
				    <input type="text" placeholder="Usuario" name="usuario" id="usuario" required oninput="listo();">
				    <input type="password" placeholder="Contraseña" id="password_registro" name="contrasena" required oninput="listo();">

				    <label>
				        <table>
				            <tr>
				                <label>
				                    <td>
				                        <input class="formulario__terminos" id="terminos" type="checkbox" name="check" required oninput="listo();">
				                    </td>
				                    <td class="terminos"><h3>¿Acepta los términos y condiciones?</h3></td>
				                </label>
				            </tr>
				        </table>
				        <!--alerta de que todos los campos fueron llenados-->
				        
				    </label>
				    <div class="estado-listo-registro" style="color: red;"></div>
				    <!--boton que me permite registrarme-->
				    <button id="registro-button">Registrarse</button>
				</form>

            </div>
        </div>
    </main>
    <!--Scripts de control-->
	<script type="text/javascript" src="JS/Responsive.js"></script>
	<script type="text/javascript" src="JS/verificarPassword.js"></script>

</body>
</html>
