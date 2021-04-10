<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NOVEDADES</title>
	<link rel="stylesheet" href="../css/css_formulario_registro_novedades.css">
</head>
<body>	
		<div class="consultar_novedad"><a href="../consultas/consulta_novedades_usuarios.php">Consultar novedades</a></div>
	  	<form action="../consultas/insertar_registro_novedad.php" method="POST">
	  		<div class="contenedor">
	  			<div class="contenedortitulo">
	  				<span>Reportar novedad</span>
	  			</div>
	  			<div class="contenedortiponovedad">
	  				<select required="on" name="tiponovedad">
	  					<option value="">tipo de novedad</option>
	  					<?php 
	  					require ('../global/conexion.php');
							$consulta = $conexion -> query("SELECT * FROM tipo_novedad ");
							while ($respuesta = mysqli_fetch_array($consulta)) {
							echo "<option value='".$respuesta['id']."'>".$respuesta['nombre']."</option>";
						 }
						?>
	  				</select>
	  			</div>
	  			<div class="contenedorareatexto">
	  				<textarea class="areatexto" name="novedad" required="on"></textarea>
	  			</div>
				<div class="botones">
					<input type="submit" name="enviar"  class="e-botones enviar" value="Registrar" id="enviar">
					<input type="reset"  name="enviar" class="e-botones limpiar" value="Limpiar" id="limpiar">
				</div>
	  		</div>
	  	</form>
	
</body>	
</html>