<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Formulario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/formulario_noticias.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/validar_registro_noticias.js"></script>
</head>
<body>
	<div class="correcto"></div>
	<div class="contenedor">
		<div class="titulo">Publicar nueva noticia</div>
		<form method="POST">
		<div class="caja-titulo">
			<input type="text" id="titulo" name="titulo" placeholder="Titulo de la noticia">
		</div>
		<div class="caja-noticia">
			<textarea name="descripcion" id="descripcion" placeholder="Descripcion de la noticia"></textarea>
		</div>
		<div class="botones">
			<input type="button"  class="e-botones publicar" value="Publicar" id="publicar">
			<input type="reset"  class="e-botones limpiar" value="Limpiar" id="limpiar">
		</div>
		</form>
	</div>
</body>
</html>
