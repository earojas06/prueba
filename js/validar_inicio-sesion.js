$(function(){
	$("#boton-iniciar").on("click", function(){
		var correo = document.getElementById('correo').value,
			contrasena = document.getElementById('contrasena').value,
			v_email = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if (correo == "") {
		$(".mensajes-error").slideDown(400).html("El campo de usuario no puede estar vacio");
			return false;
		}else if (!v_email.test(correo)) {
			$(".mensajes-error").slideDown(400).html("El campo de usuario debe incluir un signo de @ y un .");
			return false;
		}else if (contrasena == "") {
			$(".mensajes-error").slideDown(400).html("El campo de contrasña no puede estar vacio");
			return false;
		};
		$.ajax({
		    type: "POST",
		    url: "consultas/inicio_sesion.php",
		    data: "correo="+correo+"&contrasena="+contrasena,
		    success: function(res){
		    	if (res == "1") {
		    		location.href = 'vistas/vista_principal_administrador.php'; 
		    	}else if(res == "2"){
                	location.href = 'vistas/vista_principal_usuarios.php'
		    	}else if(res == "3"){
                	location.href = 'vistas/vista_principal_usuarios.php'
		    	}else if(res == "4"){
		    		location.href = 'vistas/vista_principal_guardas.php'
		    	}else{
					$(".mensajes-error").slideDown(400).html(res).delay(5000).slideUp(400);
		    	};
		    }
		})
	});
	$("#correo").bind('blur keyup', function(){
		var v_email = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if ($(this).val() != "" && v_email.test($("#correo").val())) {
			$(".mensajes-error").slideUp(400);
		};
	});
	$("#contrasena").bind('blur keyup', function(){
		if($(this).val() != "") {
			$(".mensajes-error").slideUp(400);
		};
	});
})