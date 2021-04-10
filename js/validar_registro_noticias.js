$(function(){
	$("#publicar").on("click", function(){
		var titulo = document.getElementById('titulo').value,
			descripcion = document.getElementById('descripcion').value;
		$(".error").fadeOut().remove();
		if (titulo == "" ) {
			$("#titulo").focus().after('<span class="error">El campo titulo no puede estar vacio</span>');
			return false;
		}else if (descripcion == "") {
			$("#descripcion").focus().after('<span class="error">El campo descripcion no puede estar vacio</span>');
			return false;
		}else{
			$.ajax({
				type: "POST",
				url: "../consultas/insertar_noticia.php",
				data: "titulo="+titulo+"&descripcion="+descripcion,
				success: function(res){
					$(".correcto").fadeIn(600).html(res).delay(3000).fadeOut(600);
					 $("#titulo").val("");
					 $("#descripcion").val("");
				}
			})
		};
	})
	$("#titulo, #descripcion").bind('blur keyup', function(){
		if($(this).val() != "") {
			$(".error").fadeOut(300);
		};
	})
})