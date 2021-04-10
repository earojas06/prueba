<?php 
	require ("../global/conexion.php");
	session_start();
	if (isset($_SESSION['id_usuario'])) {
		$id_usuario = $_SESSION['id_usuario'];
		$consulta_vistas_arrendatario0 = $conexion -> query("SELECT * FROM r_casa_arrendatario WHERE id_arrendatario = '".$id_usuario."'");
		$consulta_vistas_propietarios = $conexion -> query("SELECT * FROM r_casa_propietarios WHERE id_propietarios = '".$id_usuario."'");
		if($respuesta = mysqli_fetch_array($consulta_vistas_arrendatario0)){
		$id_casa = $respuesta['id_casa'];
		$consulta = $conexion -> query("SELECT * FROM novedades WHERE id_casa = '".$id_casa."'");
		}elseif ($respuesta = mysqli_fetch_array($consulta_vistas_propietarios)) {
			$id_casa = $respuesta['id_casa'];
			$consulta = $conexion -> query("SELECT * FROM novedades WHERE id_casa = '".$id_casa."'");
		}
		
	}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
	<link rel="stylesheet" href="../css/css_estilos_tablas.css">
 </head>
 <body>
 	 <div class="Tabla">
	<table class="Tabla">
		<tr>
			<td>Fecha</td>
			<td>Hora</td>
			<td>Descripcion</td>
			<td>casa</td>
			<td>Tipo de novedad</td>
			<td>Respuesta</td>
			
		</tr>
	</div>
		<tr>
		<?php 
	while ($res = mysqli_fetch_row($consulta)) {
		$consulta_tnovedad = $conexion -> query("SELECT * FROM tipo_novedad WHERE id = '".$res[5]."'");
		 if ($respuesta_tn = mysqli_fetch_array($consulta_tnovedad)){
		 	$nombre = $respuesta_tn['nombre'];
		}
	echo "
			<td>$res[1]</td>
			<td>$res[2]</td>
			<td>$res[3]</td>
			<td>$res[4]</td>
			<td>$nombre</td>
			<td>$res[6]</td>
		</tr>
		";
			}
		 ?>
	</table>
 </body>
 </html>