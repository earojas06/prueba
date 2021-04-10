<?php 
require ("../global/conexion.php");
session_start();
if (isset($_SESSION['id_usuario'])) {
	$id_usuario = $_SESSION['id_usuario'];
	$consulta = $conexion -> query("SELECT * FROM admin WHERE cedula='".$id_usuario."'");
	if ($respuesta = mysqli_fetch_array($consulta)) {
		$_SESSION['nombre'] = $respuesta['nombre'];
		$_SESSION['rol'] = $respuesta['rol'];
		$foto = $respuesta['foto'];	

		$consulta_visitas= $conexion -> query("SELECT * FROM visitas ORDER BY fecha_ingreso DESC, hora_ingreso DESC");	

	}
}	
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
	<link rel="stylesheet" href="../css/css_estilos_tablas.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/v_actualizacion_novedades.js"></script>
	<script language="javascript">
		function doSearch()
		{
			var tableReg = document.getElementById('buscar');
			var searchText = document.getElementById('searchTerm').value.toLowerCase();
			var cellsOfRow="";
			var found=false;
			var compareWith="";
			
			// Recorre todas las filas con contenido de la tabla
			for (var i = 1; i < tableReg.rows.length; i++)
			{
				cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
				found = false;
				// Recorre todas las celdas
				for (var j = 0; j < cellsOfRow.length && !found; j++)
				{
					compareWith = cellsOfRow[j].innerHTML.toLowerCase();
					// Busca el texto en el contenido de la celda
					if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
					{
						found = true;
					}
				}
				if(found)
				{
					tableReg.rows[i].style.display = '';
				} else {
					// si no ha encontrado ninguna coincidencia, esconde la
					// fila de la tabla
					tableReg.rows[i].style.display = 'none';
				}
			}
		}
	</script>
 
 </head>
 <body>
 	<div class="mensajes"></div>
<div class="buscar"> Buscar: <input id="searchTerm" type="text" onkeyup="doSearch()" autocomplete="off" /></div>
	  <div class="Tabla">
 	<table class="Tabla" id="buscar">
		<tr>
			<td>Cedula</td>
			<td>Nombre</td>
			<td>Telefono</td>
			<td>Fecha ingreso</td>
			<td>Hora ingreso</td>
			<td>Fecha salida</td>
			<td>Hora dalida</td>
			<td>Casa que autorizo</td>
			
			
		</tr>
		<tr>
		<?php 
			while ($res = mysqli_fetch_row($consulta_visitas)) {

		
					$consulta_casaint= $conexion -> query("SELECT * FROM casas WHERE id = '".$res[8]."' ");
							if ($respuesta_casint = mysqli_fetch_array($consulta_casaint)) {
									$nombre_casint = $respuesta_casint['nombre'];			
					}

					$consulta_nom= $conexion -> query("SELECT arrendatarios.nombre FROM arrendatarios ,casas ,r_casa_arrendatario WHERE casas.id = '".$res[8]."'   ");
							if ($respuesta_nom = mysqli_fetch_array($consulta_nom)) {
									$nombre_nom = $respuesta_nom['nombre'];			
					}




				echo "
					
			<td>$res[1]</td>
			<td>$res[2]</td>
			<td>$res[3]</td>
			<td>$res[4]</td>
			<td>$res[5]</td>
			<td>$res[6]</td>
			<td>$res[7]</td>
			<td>$nombre_casint</td>
		</tr>
		";
			}
		 ?>
	</table>
	</div>
 </body>
 </html>