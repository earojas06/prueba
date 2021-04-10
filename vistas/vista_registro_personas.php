<?php 
require ("../global/conexion.php");
session_start();
if (isset($_SESSION['id_usuario'])) {
	$id_usuario = $_SESSION['id_usuario'];
	$consulta = $conexion -> query("SELECT * FROM admin WHERE cedula='".$id_usuario."'");
	if ($respuesta = mysqli_fetch_array($consulta)) {
		$nombre = $respuesta['nombre'];
		$rol = $respuesta['rol'];
		$foto = $respuesta['foto'];	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='../imagenes/ventanalogo.ico' rel='shortcut icon' type='image/x-icon'>
 	<link rel="stylesheet" href="../css/css_estilos_vista_principal_administrador.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<title>Registro</title>
</head>
<body>
	<div class="menu-lateral">
		<div class="logo-navegacion logo">
			<img src="../imagenes/logoletras2.png" alt="logo de sisadmin">
		</div>
		<div class="contenedor-items">
			<ul class='lista'>
				<a href="vista_principal_administrador.php"><li class="items"><img src="../imagenes/inicio.png" alt="Imagen de inicio"><p>Inicio</p></li></a>
				<a href="vista_novedad_administrador.php"><li class="items"><img src="../imagenes/novedades.png" alt="Imagen de novedades"><p>Novedades</p></li></a>
				<a href="vista_registro_personas.php"><li class="items-seleccionado"><img src="../imagenes/registros.png" alt="Imagen de registros"><p>Registros</p></li></a>
				<a href="vista_reservas_administrador.php"><li class="items"><img src="../imagenes/reservas.png" alt="Imagen de reservas"><p>Reservas</p></li></a>
				<a href="vista_visitas_administrador.php"><li class="items"><img src="../imagenes/visitas.png" alt="Imagen de reservas"><p>Visitas</p></li></a>
			</ul>
		</div>
		<div class="menu-opciones">
			<ul>
				<a href=""><li>Ayuda</li></a>
				<a href=""><li>Mensajes</li></a>
				<a href="../global/cerrar_sesion.php"><li>Salir</li></a>
			</ul>
		</div>
	</div>
	<div class="contenido-principal">
		<div class="cabecera a">
			<div class="titulo">Registros</div>
			<div class="perfil">
				<div class="foto">
					<?php echo  "<img class=\"imagen\" src=\""."../perfiles/".$foto."\"/>"; ?>
				</div>
				<div class="datos">
					<div class="nombre"><?php echo $nombre ?></div>
					<div class="rol"><?php echo $rol;?></div>
				</div>
			</div>
		</div>
		<div class="contenido">
			<iframe src="formulario_registro_personas.php" frameborder="0"></iframe>
		</div>
	</div>
</body>
</html>
<?php
}else{
	header('Location: ../index.php');
}?>