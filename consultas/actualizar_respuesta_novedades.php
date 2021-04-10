<?php 
	require ("../global/conexion.php");
	$valor = $_POST['textoactualizado'];
	$campo = $_POST['campo'];
	$id = $_POST['id']; 
	$consulta = $conexion -> query ("UPDATE novedades SET $campo = '$valor' WHERE id = $id ");
	if ($consulta) {
		echo "La respuesta se a eviado correctamente";
	}
 ?>