<?php 
require('../global/conexion.php');
session_start();
if (isset($_SESSION['id_usuario'])){
	$id_usuario = $_SESSION['id_usuario'];

	$consulta_arrendatario = $conexion -> query("SELECT r_casa_arrendatario.* FROM casas, arrendatarios, r_casa_arrendatario 
		WHERE r_casa_arrendatario.id_arrendatario = '$id_usuario'");
	$consulta_propietarios = $conexion -> query("SELECT r_casa_propietarios.* FROM casas, propietarios, r_casa_propietarios WHERE r_casa_propietarios.id_propietarios = '$id_usuario'");

	if ($respuesta = mysqli_fetch_array($consulta_arrendatario)) {
		$id_casa = $respuesta['id_casa'];
	}elseif ($respuesta2 = mysqli_fetch_array($consulta_propietarios)) {
			$id_casa = $respuesta2['id_casa'];
		}

	if (isset($_POST['enviar'])) {

		$novedad = $_POST['novedad'];
		$tipo_novedad= $_POST['tiponovedad'];
		ini_set('date.timezone','America/Bogota');
		$fecha= date("Y/m/d");
		 $hora=date("g:i A");



		$insertar = $conexion -> query("INSERT INTO novedades (fecha,hora,descripcion,id_casa,id_tiponovedad)
		 VALUES 
		 ('".$fecha."','".$hora."','".$novedad."','$id_casa','".$tipo_novedad."')");

		if ($insertar) {
			echo "
		<p style='color:#545555; font-family: arial, sans-serif;font-size: 35px;margin-top:150px; margin-left:5%; text-align:center;'>INFORMACIÓN GUARDADA CORRECTAMENTE<br>EN SISADMIN </p>
 			<br>
 		<a href='../vistas/formulario_registro_novedades.php'><div id='continuar' class='botones2'>Continuar</div></a>
		";
			
		}else{
			echo "error".mysqli_errno();
		}
	}
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
 	a{
 		text-decoration: none;
 	}
.botones2{
	width: 20%; 
	height: 32px;
	margin-left: 42%;
	background: #51c657;
	border-radius: 3px;
	border: 1px solid #51c657;
	color: #fff;
	font-family: arial, sans-serif;
	font-size: 18px;
	transition: .5s all;
	text-align: center;
}
.botones2:hover{
	background: #4CAF50;
	border: 1px solid #4CAF50;
	cursor: pointer;
}
 	</style>
 </head>
 <body> 	
 </body>
 </html>