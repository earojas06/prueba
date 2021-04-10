<?php 
	require("../global/conexion.php");
	session_start();
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	$consulta_administrador = $conexion -> query("SELECT * FROM admin WHERE email='$correo' AND contrasena='$contrasena'"); 
	$consulta_arrendatarios = $conexion -> query("SELECT * FROM arrendatarios WHERE email='$correo' AND contrasena='$contrasena'");
	$consulta_propietarios = $conexion -> query("SELECT * FROM propietarios WHERE email='$correo' AND contrasena='$contrasena'");  
	$consulta_guardas = $conexion -> query("SELECT * FROM guardas WHERE email='$correo' AND contrasena='$contrasena'");  
	if ($res1 = mysqli_fetch_array($consulta_administrador)) {
		$_SESSION['id_usuario'] = $res1['cedula'];
		echo 1;		
	}else if($respuesta2 = mysqli_fetch_array($consulta_arrendatarios)){
		$_SESSION['id_usuario'] = $respuesta2['cedula'];
		echo 2;
	}else if($respuesta3 = mysqli_fetch_array($consulta_propietarios)){
		$_SESSION['id_usuario'] = $respuesta3['cedula'];
		echo 3;
	}else if($respuesta4 = mysqli_fetch_array($consulta_guardas)){
		$_SESSION['id_usuario'] = $respuesta4['cedula'];
		echo 4;
	}else if (mysqli_num_rows($consulta_administrador)<1 OR mysqli_num_rows($consulta_arrendatarios) <1 OR mysqli_num_rows($consulta_propietarios) <1 OR mysqli_num_rows($consulta_guardas) <1) {
		echo "¡Lo sentimos el usuario no existe!";
	}
 ?>