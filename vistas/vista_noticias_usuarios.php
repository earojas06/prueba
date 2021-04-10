<?php 
	require("../global/conexion.php");
	$consulta = $conexion -> query("SELECT * from noticias ");
	while ($respuesta=mysqli_fetch_array($consulta)) {
			$titulo = $respuesta[3];
			$descripcion = $respuesta[4]; 
			$fecha = $respuesta[1];
			$hora = $respuesta[2];
		}
	 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Noticias usuarios</title>
	<link rel="stylesheet"  href="../css/noticias_usuarios.css">
</head>
<body>
<div class="mostrar_noticia"><h2>Noticias Recientes</h2>
 <marquee onmouseover="this.stop()" onmouseout="this.start()"width="100%" direction="down" scrolldelay="400" scrollamount=10><table class="contenedor_movimiento">
 	<tr>
 		<td><?php echo $titulo."<br>".$descripcion; ?></td>
  	</tr>
 </table></marquee>
<!--div class="contenedor_movimiento"><marquee onmouseover="this.stop()" onmouseout="this.start()"width="100%" direction="down" scrolldelay="400" scrollamount=10>

<div class="titulo"><?php echo $titulo; ?></div>
<div class="descripcion"><?php echo $respuesta[4]; ?></div>
</marquee></div>-->
<div class="contenedor">

<div class="fecha"><h1>Fecha: <?php echo $fecha; ?></h1></div>
<div class="hora"><h1>Hora: <?php echo $hora; ?></h1></div>
</div>
	
</div>

 
 
</div>
</body>
</html>