<?php 
	require ("../global/conexion.php");
	session_start();
	if (isset($_SESSION['id_usuario'])) {
		$id_usuario = $_SESSION['id_usuario'];
		$consulta_vistas_arrendatario = $conexion -> query("SELECT * FROM r_casa_arrendatario 
			WHERE id_arrendatario = '".$id_usuario."'");

		$consulta_vistas_propietarios = $conexion -> query("SELECT * FROM r_casa_propietarios 
			WHERE id_propietarios = '".$id_usuario."'");

		if($respuesta = mysqli_fetch_array($consulta_vistas_arrendatario)){
		$id_casa = $respuesta['id_casa'];
		$consulta_reserva = $conexion -> query("SELECT * FROM reservas WHERE id_casa = '".$id_casa."'");
		}elseif ($respuesta = mysqli_fetch_array($consulta_vistas_propietarios)) {
			$id_casa = $respuesta['id_casa'];
			$consulta_reserva = $conexion -> query("SELECT * FROM reservas WHERE id_casa = '".$id_casa."'");
		}
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
	<link rel="stylesheet" href="../css/css_estilos_tablas.css">
 </head>
 <body>
 	<div class="Tabla">
	<table class="Tabla" id="buscar">
		<tr>
			<td>Fecha</td>
			<td>Hora inicio</td>
			<td>Hora de Entrega</td>
			<td>Motivo</td>
			<td>Casa</td>
			<td>Respuesta</td>
		</tr>
		</div>
		<tr>
		<?php 
			while ($res = mysqli_fetch_row($consulta_reserva)) {

			echo "
					
			<td>$res[1]</td>
			<td>$res[2]</td>
			<td>$res[3]</td>
			<td>$res[4]</td>
			<td>$res[5]</td>
			<td>$res[6]</td>
		</tr>
		";
			}
		 ?>
	</table>
 </body>
 </html>
 <?php 
}else{
	header('Location: ../index.php');
}
  ?>