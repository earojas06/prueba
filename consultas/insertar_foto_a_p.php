<?php 
	require ("../global/conexion.php");
	session_start();
	$formatos = array('.jpg','.png','.jpeg','.JPG','.PNG','.JPEG','.gif','.GIF');
	if (isset($_SESSION['id_usuario'])) {
		$id_usuario = $_SESSION['id_usuario'];
	if (isset($_POST['enviar_foto'])) {
		$nombreArchivo = $_FILES['subir_foto']['name'];
		$nombreTemporalArchivo = $_FILES['subir_foto']['tmp_name'];
		$extencion = substr($nombreArchivo, strripos($nombreArchivo, '.'));
		if (in_array($extencion, $formatos)) {
			if (move_uploaded_file($nombreTemporalArchivo, "../perfiles/$nombreArchivo")) {
				$insertar = $conexion -> query ("UPDATE sisadmin2.arrendatarios SET foto = '$nombreArchivo' WHERE arrendatarios.cedula = '$id_usuario'");

				$insertar2 = $conexion -> query ("UPDATE sisadmin2.propietarios SET foto = '$nombreArchivo' WHERE propietarios.cedula = '$id_usuario';");
				if ($insertar) {
					header('Location: ../vistas/vista_principal_usuarios.php');
				}elseif ($insertar2) {
					header('Location: ../vistas/vista_principal_usuarios.php');
				}
			}
		}else{
			echo "no permitido";
		}
	}
}else{
	header('Location: ../index.php');
}
 ?>	