<?php
require('../global/conexion.php');
session_start();
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
ini_set('date.timezone','America/Bogota');
$fecha= date("Y/m/d");
$hora=date("g:i A");
	$Insertar=$conexion->query("INSERT INTO noticias( fecha, hora, titulo, descripcion) VALUES ('".$fecha."', '".$hora."', '".$titulo."','".$descripcion."')");
	if ($Insertar) {
		echo "Noticia publicada correctamente<br><input type='button' value='continuar' class='e-botones c'></div>";
	}

/*if (isset($_SESSION['id_usuario'])) {
		$id_usuario = $_SESSION['id_usuario'];
		if (isset($_POST['Publicar'])) {
			$Titulo=$_POST['Titulo'];
			$Descripcion=$_POST['Descripcion'];
			ini_set('date.timezone','America/Bogota');
		$fecha= date("Y/m/d");
		 $hora=date("g:i A");
			$Insertar=$conexion->query("INSERT INTO noticias( fecha, hora, titulo, descripcion) VALUES ('".$fecha."', '".$hora."', '".$Titulo."','".$Descripcion."')");
			if ($Insertar) {
				echo "<p style='color:#4CAF50; font-family: arial;font-size: 35px;margin-top:150px; margin-left:5%; text-align:center;'>Se inserto correctamente</p>
 			<br>
 			<a href='../vistas/formulario_registro_noticias.php'><div id='continuar' class='botones2'>Continuar</div></a>
		";
			}else{
				echo "no se inserto".mysqli_errno();
			}
		}
	}else{
	header('Location: ../index.php');
}*/

