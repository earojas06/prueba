 <?php 
 	require("../global/conexion.php");
  ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
	<link rel="stylesheet" href="../css/css_estilos_tablas.css">
	<link rel="stylesheet" href="../css/swith.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/v_actualizacion_guarda_visitas.js"></script>
 </head>
 <body>
 	<div class="mensajes"></div>
	<div class="Tabla">
	<table class="tabla">
		<tr>
			<td>Cedula</td>
			<td>Nombre</td>
			<td>Telefono</td>
			<td>Fecha de ingreso</td>
			<td>Hora de ingreso</td>
			<td>Fecha de salida</td>
			<td>Hora de salida</td>
			<td>Casa</td>
		</tr>
		</div>
		<tr>
		<?php 
			$consulta = $conexion -> query("SELECT * FROM visitas");
			while ($res = mysqli_fetch_row($consulta)) {
				$id_casa = $res[8];
				$consulta_casa = $conexion -> query("SELECT * FROM casas WHERE id ='$id_casa' ");
				if ($res2 = mysqli_fetch_array($consulta_casa)) {
					$nommbre_casa = $res2['nombre'];
				}
				echo "
			<form method='POST'> 
			<td>$res[1]</td>
			<td>$res[2]</td>
			<td>$res[3]</td>
			<td></td>
			<td>$res[5]</td>
			<td>$res[6]</td>
			<td>$res[7]</td>
			<td>$nommbre_casa</td>
			</tr>
			</form>
		";
			}
		 ?>
	</table>
 </body>
 </html>