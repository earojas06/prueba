<?php
	$conexion = new mysqli("localhost","root","","sisadmin");
	if ($conexion) {
		
	}else{
		echo "No se realizo la conexion".mysqli_errno();
	}
	/*if (mysqli_connect_error()) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Éxito... ' . $mysqli->host_info . "\n";

$mysqli->close();*/

?>