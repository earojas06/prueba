<?php 
	require ("../global/conexion.php");
	if (isset($_POST['enviar'])) {
		$cedula = $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$genero = $_POST['genero'];
		$rh = $_POST['rh'];
		$email = $_POST['email'];
		$rol = $_POST['rol'];
		$casa = $_POST['casa'];
		//......................
		if ($rol == "arrendatario") {
		$validar_existencia_arrendatario = $conexion ->query("SELECT cedula FROM arrendatarios WHERE cedula = '".$cedula."' ");
		/*Si la informacio devuelta es igual a un valor 0, el registro no existe*/
		if (mysqli_num_rows($validar_existencia_arrendatario)==0) {
			$registrar_arrendatario = $conexion -> query("INSERT INTO arrendatarios (cedula, nombre, telefono, genero, rh, email, contrasena, rol) VALUES ('".$cedula."','".$nombre."','".$telefono."','".$genero."','".$rh."','".$email."','eee','".$rol."')");
			if ($registrar_arrendatario) {
				$registrar_relacion_c_a = $conexion -> query("INSERT INTO r_casa_arrendatario(id_casa, id_arrendatario) VALUES ('".$casa."','".$cedula."') ");
			echo "
			<p style='color:#545555; font-family: arial;font-size: 35px;margin-top:150px; margin-left:5%; text-align:center;'>
			INFORMACIÓN GUARDADA CORRECTAMENTE<br>EN SISADMIN </p>
 			<br>
 			<a href='../vistas/formulario_registro_personas.php'>
 			<div id='continuar' class='botones2'>Continuar</div></a>
			";
			}
		}else{
			echo "
			<p style='color:#545555; font-family: arial;font-size: 35px;margin-top:150px; margin-left:5%; text-align:center;'>
			YA EXISTE UN REGISTRO CON LA CEDULA $cedula <br>EN SISADMIN </p>
 			<br>
 			<a href='../vistas/formulario_registro_personas.php'>
 			<div id='continuar' class='botones2'>Continuar</div></a>
			";
		}
	}elseif ($rol == "guarda") {
		$direccion_guarda = $_POST['direccion'];
		$validar_existencia_guarda = $conexion -> query("SELECT cedula FROM guardas WHERE cedula = '".$cedula."'");
		if (mysqli_num_rows($validar_existencia_guarda)==0) {
			$registrar_guarda = $conexion -> query("INSERT INTO guardas (cedula, nombre, telefono, genero, rh, email, contrasena, direccion,rol)VALUES 
				('".$cedula."','".$nombre."','".$telefono."','".$genero."','".$rh."','".$email."','".$rol."','".$direccion_guarda."','".$rol."')");
			if ($registrar_guarda) {
				echo "
			<p style='color:#545555; font-family: arial;font-size: 35px;margin-top:150px; margin-left:5%; text-align:center;'>
			INFORMACIÓN GUARDADA CORRECTAMENTE<br>EN SISADMIN </p>
 			<br>
 			<a href='../vistas/formulario_registro_personas.php'>
 			<div id='continuar' class='botones2'>Continuar</div></a>
			";
			}
		}else{
			echo "
			<p style='color:#545555; font-family: arial;font-size: 35px;margin-top:150px; margin-left:5%; text-align:center;'>
			YA EXISTE UN REGISTRO CON LA CEDULA $cedula <br>EN SISADMIN </p>
 			<br>
 			<a href='../vistas/formulario_registro_personas.php'>
 			<div id='continuar' class='botones2'>Continuar</div></a>
			";
		}
	}elseif ($rol == "propietario") {
		$validar_existencia_propietario = $conexion ->query("SELECT cedula FROM propietarios WHERE cedula = '".$cedula."' ");
		if (mysqli_num_rows($validar_existencia_propietario)==0) {
			$registrar_propietarios = $conexion -> query("INSERT INTO propietarios (cedula, nombre, telefono, genero, rh, email, contrasena, rol) VALUES ('".$cedula."','".$nombre."','".$telefono."','".$genero."','".$rh."','".$email."','eee','".$rol."')");
			if ($registrar_propietarios) {
				$registrar_relacion_c_p = $conexion -> query("INSERT INTO r_casa_propietarios(id_casa, id_propietarios) VALUES ('".$casa."','".$cedula."') ");
				echo "
			<p style='color:#545555; font-family: arial;font-size: 35px;margin-top:150px; margin-left:5%; text-align:center;'>
			INFORMACIÓN GUARDADA CORRECTAMENTE<br>EN SISADMIN </p>
 			<br>
 			<a href='../vistas/formulario_registro_personas.php'>
 			<div id='continuar' class='botones2'>Continuar</div></a>
			";
			}
		}else{
			echo "
			<p style='color:#545555; font-family: arial;font-size: 35px;margin-top:150px; margin-left:5%; text-align:center;'>
			YA EXISTE UN REGISTRO CON LA CEDULA $cedula <br>EN SISADMIN </p>
 			<br>
 			<a href='../vistas/formulario_registro_personas.php'>
 			<div id='continuar' class='botones2'>Continuar</div></a>
			";
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