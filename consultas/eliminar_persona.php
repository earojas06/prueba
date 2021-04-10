<?php 
	require("../global/conexion.php");
	$cedula = $_POST['cedula'];
	$eliminar = $conexion -> query("DELETE FROM r_casa_arrendatario WHERE id_arrendatario = '$cedula'");
	$eliminar2 = $conexion -> query("DELETE FROM r_casa_propietarios WHERE id_propietarios = '$cedula' ");
	$eliminar3 = $conexion -> query("DELETE FROM guardas WHERE cedula = '$cedula' ");
	if ($eliminar) {
	$eliminar_tpa = $conexion -> query("DELETE FROM arrendatarios WHERE cedula = '$cedula'");
		echo 1;
	}elseif($eliminar2){
	$eliminar_tpp = $conexion -> query("DELETE FROM propietarios WHERE cedula = '$cedula'");
		echo 2;
	}elseif ($eliminar3) {
		echo 3;
	}
 ?>