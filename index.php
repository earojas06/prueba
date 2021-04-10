<?php 
 	session_start();
 	session_destroy();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
	<link href='imagenes/ventanalogo.ico' rel='shortcut icon' type='image/x-icon'>
 	<link rel="stylesheet" href="css/css_estilos_login.css">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/abriverventanarecuperarcontasena.js"></script>
	<script type="text/javascript" src="js/validar_inicio-sesion.js"></script>
 	<title>Incio de sesion</title>
 </head>
 <body>
 	<!-- Recuperar Contraseña-->
 	<div class="total-recuperarcontrasena">
 		<div class="contenedor-formulario">
 			<div class="titulo">RECUPERAR CONTRASEÑA</div>
 			<div class="correo-recuperar">
 				<div class="caja-imagen"><img src="imagenes/user.png" alt="Imagen de usuario"></div>
 				<div class="caja-correo"><input type="text" placeholder="Ingresa tu correo" name="correo-recuperar-contraseña"></div>
 			</div>
 			<div class="contenedor-botones">
 				<input type="button" value="Enviar" class="botones enviar">
 				<input type="button" onclick="javascript:abrirVentana()" value="Cerrar" class="botones">
 			</div>
 		</div>
 	</div>
 	<!-- ....................-->
 	<div class="cabecera">
 		<div class="imagen-logo">
 			<img src="imagenes/logo.png" alt="Logo de SisAdmin">
 		</div>
 	</div>
 	<div class="titulo-principal">
 		Inicia sesión con tú cuenta
 	</div>
 	<div class="contenedor-principal">
 		<form method="POST">
 		<div class="contenedor-formulario-login">
 			<br>
 			<div class="cajas">
 				<div class="imagen"><img src="imagenes/user.png" alt="Imagen Usuario"></div>
 				<div class="input"><input type="email" id="correo" name="correo" placeholder="Ingresa tu correo"></div>
 			</div>
 			 <div class="cajas">
 				<div class="imagen"><img src="imagenes/pass.png" alt="Imagen Contraseña"></div>
 				<div class="input"><input type="password" id="contrasena" name="contrasena" placeholder="Ingresa tú contraseña"></div>
 			</div>
			<div class="boton-iniciar">
				<input type="button" value="INICIAR" id="boton-iniciar">
			</div>
			<div class="mensajes-error">El campo usuario no puede estar basio</div>
			<hr>
				<p class="olvido">¿Olvido su contraseña?</p>
				<p class="recuperar"><a href="javascript:abrirVentana();">Click aquí</a> para recuperarla</p>
 		</div>
 		</form>
 	</div>
 </body>
 </html>