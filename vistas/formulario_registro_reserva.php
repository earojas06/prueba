<?php 
	require("../global/conexion.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reservas</title>
	<link rel="stylesheet" href="../css/css_formulario_registro_reservas.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/v_formulario_registro_reserva.js"></script>
	<link href='../imagenes/ventanalogo.ico' rel='shortcut icon' type='image/x-icon'>
</head>
<body>

	<div class="c_formulario">
	<div class="formulario">
	<div class="titulo">Solicitar Reserva</div>		
	<form action="../consultas/insertar_registro_reserva.php" method="post">
		<div class="cajas">
			<div class="imagen"><img src="../imagenes/fecha.png" alt="fecha"></div>
			<div class="caja_texto"><input type="date" placeholder="Fecha de Solicitud" name="fecha" id="fecha"></div>
		</div>
		<div class="cajas">
			<div class="imagen"><img src="../imagenes/hora.png" alt="hora"></div>
			<div class="caja_texto"><input type="time"  placeholder="Hora de Inicio" name="hora_inicio" id="hora_inicio"></div>
		</div>
		<div class="cajas">
			<div class="imagen"><img src="../imagenes/hora.png" alt="hora"></div>
			<div class="caja_texto"><input type="time"  placeholder="Hora de entrega" name="hora_entrega" id="hora_entrega"></div>
		</div>
		<div class="cajas">
			<div class="imagen"><img src="../imagenes/area.png" alt="area"></div>
			<div class="caja_texto"><input type="text"  placeholder="Motivo" name="motivo" id="motivo"></div>
		</div>
		
			<div class="botones">
			<input type="submit" name="enviar"  class="e-botones enviar" value="Registrar" id="enviar">
			<input type="reset"  name="enviar" class="e-botones limpiar" value="Limpiar" id="limpiar">
		</div>
	<div class="consultar_historial_reservas"><a href="../consultas/consulta_reserva_usuarios.php">¡Consultar mi historial de reservas!</a></div>
		</div>
	</form>
		</div>

		<!--<iframe src="mostrar_tabla_arrendatario.html" frameborder="0"></iframe>-->
	<script type="text/javascript" src="../js/jquery.js"></script>
	
</body>
</html>