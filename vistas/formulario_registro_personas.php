<?php 
	require("../global/conexion.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../css/css_estilos_registros_personas.css">
	<link href='../imagenes/ventanalogo.ico' rel='shortcut icon' type='image/x-icon'>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/v_formulario_registro_personas.js"></script>

</head>
<body>
		<div class="titulo"><p>Registro de personas</p></div>	
		<div class="formulario_contenedor">
			<form action="../consultas/insertar_registro_personas.php" method="post">
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
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/genero.png" alt="genero.png"></div>
					<div class="caja_texto">
					<select name="genero">
         			<optgroup label="Genero">
           				<option value="hombre">Hombre</option>
           				<option value="mujer">Mujer</option>
        		    </optgroup>
       			 	</select>
       				</div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/rh.png" alt="rh.png"></div>
					<div class="caja_texto">
					<select name="rh" id="">
						<optgroup label="Grupo sanguíneo y RH"></optgroup>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select>
					</div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/email.png" alt="email.png"></div>
					<div class="caja_texto"><input type="text" placeholder="Correo Electronico" id="email" name="email"  ></div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/rol.png" alt="rol.png"></div>
					<div class="caja_texto">
						<select name="rol" id="rol" onChange="Mostrar(this.form)">
						<optgroup label="Rol"></optgroup>
						<option value="arrendatario">Arrendatario</option>
						<option value="guarda">Guarda de seguridad</option>
						<option value="propietario">Propietario</option>
					</select>

					</div>
					<div class="tipo_consulta">
						<a href="../consultas/consulta_arrendatrarios.php"><div id="uno">Consultar Arrendatario</div></a>
						<a href="../consultas/consulta_guardas.php"><div id="dos">Consultar Guardas</div></a>
						<a href="../consultas/consultar_propietarios.php"><div id="tres">Consultar Propietarios</div></a>
					</div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/casa.png" alt="casa.png"></div>
					<div class="caja_texto">
					<select name="casa" id="casa">
						<optgroup label="Casa"></optgroup>
						<?php 
							$consulta = $conexion -> query("SELECT * FROM `casas` ORDER BY CAST((LEFT(id,INSTR(ID,'-')-1))AS UNSIGNED),CAST( RIGHT(id, LENGTH(id) - INSTR(id, '-' ) ) AS UNSIGNED ) ");
							while ($respuesta = mysqli_fetch_array($consulta)) {
							echo "<option value='".$respuesta['id']."'>".$respuesta['nombre']."</option>";
						 }
						?>
					</select>
					</div>
				</div>
				<div class="cajas" id="casa_guarda" name="casa_guarda">
					<div class="imagen"><img src="../imagenes/casa.png" alt="casa.png"></div>
					<div class="caja_texto"><input type="text" placeholder="Dirección" id="direccion" name="direccion"></div>
				</div>
				<div class="botones">
					<input type="submit" name="enviar"  class="e-botones enviar" value="Registrar" id="enviar">
					<input type="reset"  name="enviar" class="e-botones limpiar" value="Limpiar" id="limpiar">
				</div>
			</form>
		</div>
		<!--<iframe src="../consultas/consulta_arrendatrarios.php" frameborder="0"></iframe>--></body>
</html>