 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/css_formulario_registro_visitas.css">
	<link rel="stylesheet" href="../css/tcal.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/v_formulario_registro_visitas.js"></script>
	</head>
<body>	
	
	<div class="c_formulario">
		<div class="formulario">
		<div class="titulo">Registrar Autorización Nueva Visita</div>		
		<form action="../consultas/insertar_regitro_visitas.php" method="POST">
			<div class="cajas">
					<div class="imagen"><img src="../imagenes/cedula.png" alt="cedula.png"></div>
					<div class="caja_texto"><input type="number" min="1" placeholder="Identificacion" id="cedula" name="cedula"></div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/nombre.png" alt="nombre.png"></div>
					<div class="caja_texto"><input type="text" placeholder="Nombres y apellidos" id="nombre" name="nombre"></div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/telefon.png" alt="telefono.png"></div>
					<div class="caja_texto"><input type="text" placeholder="Telefono" id="telefono" name="telefono"></div>
				</div>
				<div class="botones">
					<input type="submit" name="enviar"  class="e-botones enviar" value="Registrar" id="enviar">
					<input type="reset"  name="enviar" class="e-botones limpiar" value="Limpiar" id="limpiar">
				</div>
		</form>
		</div> 
	</div> 
	<div class="consultar_historial_visitas"><a href="../consultas/consulta_visitas_usuarios.php">¡Consultar mi historial de visitas!</a></div>
</body>	
</html>	