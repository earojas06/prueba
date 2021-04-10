<?php 
	require ("../global/conexion.php");
	$formatos = array('.jpg','.png','.jpeg','.JPG','.PNG','.JPEG','.gif','.GIF');
	if (isset($_POST['enviar_foto'])) {
		$nombreArchivo = $_FILES['subir_foto']['name'];
		$nombreTemporalArchivo = $_FILES['subir_foto']['tmp_name'];
		$extencion = substr($nombreArchivo, strripos($nombreArchivo, '.'));
		if (in_array($extencion, $formatos)) {
			if (move_uploaded_file($nombreTemporalArchivo, "../perfiles/$nombreArchivo")) {
				$insertar = $conexion -> query ("UPDATE sisadmin2.guardas SET foto = '$nombreArchivo'");
				if ($insertar) {
					header('Location: ../vistas/vista_principal_guardas.php');
				}
			}
		}else{
			echo "no permitido";
		}
	}
 ?>	