$(function() {
		var cedula = document.getElementById('cedula').value;
	$("#eliminar").on("click", function(){
		$(".supe-contenedor").fadeIn(600); 
		$(".contenedor-pregunta").show();
	})
	$("#actualizar").on("click", function(){
		$(".supe-contenedor").fadeIn(600); 
		$(".contenedor-pregunta2").show();
	})
	$("#cancelar_f").on("click", function(){
		location.href = 'consulta_arrendatrarios.php'; 
	})
	$("#cancelar, #cancelar2").on("click", function(){
		$(".supe-contenedor").fadeOut(600);
	})
	$("#c_eliminar").on("click", function(){
		$.ajax({
			type: "POST",
			url: "../consultas/eliminar_persona.php",
			data: "cedula="+cedula,
			success: function(res){ 
				if (res == '1') {
					alert("El registro se elimino Correctamente");
		    		location.href = 'consulta_arrendatrarios.php'; 
				}else if(res == '2'){
					alert("El registro se elimino Correctamente");
					location.href = 'consultar_propietarios.php'; 
				}else if(res == '3'){
					alert("El registro se elimino Correctamente");
					location.href = 'consultar_guardas.php'; 
				}
			}
		})
	})
})

