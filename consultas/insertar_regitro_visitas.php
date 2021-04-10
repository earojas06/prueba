<?php 
	require('../global/conexion.php');
	session_start();
	if (isset($_SESSION['id_usuario'])) {
		$id_usuario = $_SESSION['id_usuario'];
		$consulta_arrendatario = $conexion -> query("SELECT r_casa_arrendatario.* FROM casas, arrendatarios, r_casa_arrendatario WHERE r_casa_arrendatario.id_arrendatario = '$id_usuario'");
		$consulta_propietarios = $conexion -> query("SELECT r_casa_propietarios.* FROM casas, propietarios, r_casa_propietarios WHERE r_casa_propietarios.id_propietarios = '$id_usuario'");

		if ($respuesta = mysqli_fetch_array($consulta_arrendatario)) {
			$id_casa = $respuesta['id_casa'];
		}elseif ($respuesta2 = mysqli_fetch_array($consulta_propietarios)) {
			$id_casa = $respuesta2['id_casa'];
		}
	
	if (isset($_POST['enviar'])) {
		$cedula = $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$insertar = $conexion -> query("INSERT INTO visitas (cedula, nombre, telefono, id_casa) VALUES
			('".$cedula."','".$nombre."','".$telefono."','$id_casa')");
		if ($insertar) {
			echo "
		<p style='color:#4CAF50; font-family: arial;font-size: 35px;margin-top:150px; margin-left:5%; text-align:center;'>INFORMACIÓN GUARDADA CORRECTAMENTE<br>EN SISADMIN </p>
 			<br>
 		<a href='../vistas/formulario_registro_visitas.php'><div id='continuar' class='botones2'>Continuar</div></a>
		";
		}else{
			echo "mal".mysqli_errno();
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
	font-family: cursive;
	background:#4CAF50;
	border: solid 0px;
	color: #fff;
	cursor: pointer;	
	font-size: 20px;
	height: 32px;
	margin-left: 42%;
	transition:0.5s;
	width: 15%;	
	text-align: center;
}
.botones2{
	background:#1a741e;
}
 	</style>
 </head>
 <body> 	
 </body>
 </html>