<?php 
	require("../global/conexion.php");
	$cedula = $_POST['cedula'];
    $consulta = $conexion -> query("SELECT * FROM guardas" );  
    if ($res = mysqli_fetch_array($consulta)) {
        	$identificacion = $res[0];
        	$nombre = $res[1];
        	$telefono = $res[2];
        	$genero = $res[3];
        	$rh = $res[4];
        	$email = $res[5];
        	$direccion = $res[7];
        	$rol = $res[8];
        	
        }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../css/css_estilos_registros_personas.css">
	<link rel="stylesheet" href="../css/alertas.css">
	<link href='../imagenes/ventanalogo.ico' rel='shortcut icon' type='image/x-icon'>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/v_formulario_registro_personas.js"></script>
	<script type="text/javascript" src="../js/validar_eliminar.js"></script>
	<script type="text/javascript" src="../js/jquery.alerts.js"></script>
</head>
<body>
	<!--.................................-->
	<div class="supe-contenedor">
	<div class="contenedor-pregunta">
		<div class="titulo_pregunta">SisAdmin Pregunta</div>
		<div class="pregunta">
			¿En realidad desea eliminar el registro?
		</div>
		<br>
		<div class="botones">
			<input type="button" value="Aceptar" id="c_eliminar" class="a e">
			<input type="button" value="Cancelar" id="cancelar" class="a c">
		</div>
		<br>
	</div>
		<div class="contenedor-pregunta2">
		<div class="titulo_pregunta">SisAdmin Pregunta</div>
		<div class="pregunta">
			¿En realidad desea actualizar el registro?
		</div>
		<br>
		<div class="botones">
			<input type="button" value="Enviar" id="enviar" class="a en">
			<input type="button" value="Cancelar" id="cancelar2" class="a c">
		</div>
		<br>
	</div>
	</div>
	<!--.................................-->
		<div class="titulo"><p>Actualizar Registro</p></div>	
		<div class="formulario_contenedor">
			<form method="POST">
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/cedula.png" alt="cedula.png"></div>
					<div class="caja_texto"><input type="number" readonly min="1" value="<?php echo $identificacion; ?>" placeholder="Identificacion" id="cedula" name="cedula"></div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/nombre.png" alt="nombre.png"></div>
					<div class="caja_texto"><input type="text" value="<?php echo $nombre; ?>" placeholder="Nombres y apellidos" id="nombre" name="nombre"></div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/telefon.png" alt="telefono.png"></div>
					<div class="caja_texto"><input type="text" value="<?php echo $telefono; ?>" placeholder="Telefono" id="telefono" name="telefono"></div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/genero.png" alt="genero.png"></div>
					<div class="caja_texto">
					<select name="genero">
         			<optgroup label="Genero">
         				<option value="<?php echo $genero; ?>"><?php echo $genero; ?></option>
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
						<option value="<?php echo $rh; ?>"><?php echo $rh; ?></option>
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
					<div class="caja_texto"><input type="text" value="<?php echo $email; ?>" placeholder="Correo Electronico" id="email" name="email"  ></div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/casa.png" alt="casa.png"></div>
					<div class="caja_texto"><input type="text" value="<?php echo $direccion; ?>"  id="direccion" name="direccion"  ></div>
				</div>
				<div class="cajas">
					<div class="imagen"><img src="../imagenes/rol.png" alt="rol.png"></div>
					<div class="caja_texto"><input type="text" readonly value="<?php echo $rol; ?>"  id="rol" name="rol"  ></div>
				</div>
				<div class="botones2">
					<input type="button" name="actualizar"  class="e-botones2 actualizar" value="Actualizar" name="actualizar" id="actualizar">
					<input type="button"  name="eliminar" class="e-botones2 eliminar" value="Eliminar" id="eliminar">
					<input type="button"  name="cancelar" class="e-botones2 cancelar" value="Cancelar" id="cancelar_f">
				</div>
			</form>
		</div>
		<!--<iframe src="../consultas/consulta_arrendatrarios.php" frameborder="0"></iframe>--></body>
</html>