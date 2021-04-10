<?php 
require ("../global/conexion.php");
session_start();
if (isset($_SESSION['id_usuario'])) {
	$id_usuario = $_SESSION['id_usuario'];
	$consulta = $conexion -> query("SELECT * FROM guardas WHERE cedula='".$id_usuario."'");
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
	<link rel="stylesheet" href="../css/css_estilos_cambiar_perfil.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/abriverventanarecuperarcontasena.js"></script>
	<title>Document</title>
</head>
<body>
	<!--...........CAMBI DE PERFIL...............-->
	<form action="../consultas/insertar_foto_guarda.php" method="POST" enctype="multipart/form-data">
	<div id="cambiar_perfil" class="cambiar_perfil" >
		<div class="contenedor_cambio_perfil">
			<div class="header_cambio_perfil">
				<h1>Selecciona una foto de perfil</h1>
				<a href="javascript:cerrarVentanaPerfil();"><img src="../imagenes/cerrar.png" alt="cerrar.png"></a>
			</div>
			<div class="central_cambio_perfil">
				<div class="contenedor_file">
				<p>Subir desde tu computador</p>
				<input type="file" id="subir_foto" name="subir_foto" class="subir_foto">
				</div>
			</div>		
			<div class="pie_cambio_perfil">
				<input type="submit" value="Establecer como foto de perfil" id="enviar_foto" name="enviar_foto"> 
				<a href="javascript:cerrarVentanaPerfil();"><div class="cancelar"><p>Cancelar</p></div></a>
			</div>
		</div>
	</div>
	</form>
	<!--.........................................-->
	<div class="menu-lateral">
		<div class="logo-navegacion logo">
			<img src="../imagenes/logoletras2.png" alt="logo de sisadmin">
		</div>
		<div class="contenedor-items">
			<ul class='lista'>
				<a href="vista_principal_administrador.php"><li class="items-seleccionado"><img src="../imagenes/inicio.png" alt="Imagen de inicio"><p>Inicio</p></li></a>
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
			<div class="titulo">Inicio</div>
			<div class="perfil">
				<div class="foto">
				<a href="javascript:abrirVentanaPerfil();">
				<div class="configurar_foto">
				<p class="texto-configurar_foto">Cambiar <br>Foto</p> 
			</div></a>
					<?php echo  "<img class=\"imagen\" src=\""."../perfiles/".$foto."\"/>"; ?>
				</div>
				<div class="datos">
					<div class="nombre"><?php echo $nombre ?></div>
					<div class="rol"><?php echo $rol;?></div>
				</div>
			</div>
		</div>
		<div class="contenido">
			<iframe src="../consultas/consulta_visitas_guardas.php" frameborder="0"></iframe>
		</div>
	</div>
</body>
</html>
<?php
}else{
	header('Location: ../index.php');
}?>