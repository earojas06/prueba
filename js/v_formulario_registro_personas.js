 $(function(){
	$('#enviar').click(function(){
		var cedula = document.getElementById('cedula').value,
			telefono = document.getElementById('telefono').value,
			nombre = document.getElementById('nombre').value,
			email = document.getElementById('email').value,
            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
		$(".error").fadeOut().remove();
		if (cedula < 1 ) {
				$("#cedula").focus().after('<span class="error">El campo cedula no puede tener un valor menor a 1, ni vacio</span>');
				return false;
		}else if (cedula.length > 10 ) {
				$("#cedula").focus().after('<span class="error">El campo cedula no puede tener mas de 10 caracteres</span>');
				return false;
		}else if (nombre == "") {
			$("#nombre").focus().after('<span class="error">El campo nombre no puede estar vacio</span>');
				return false;
		}else if (telefono == "") {
			$("#telefono").focus().after('<span class="error">El campo telefon no puede estar vacio</span>');
				return false;
		}else if (telefono.length > 10) {
			$("#telefono").focus().after('<span class="error">El campo telefon no puede tener mas de 10 caracteres</span>');
				return false;
		}else if (email == "" ) {
			 $("#email").focus().after('<span class="error">El campo email no puede estar vacio</span>');    
            return false;
		}else if (!validacion_email.test(email)) {
		 	 $("#email").focus().after('<span class="error">Incluya un sigo de @ y un .</span>');    
            return false;
		 }
	});
	$('#rol').change(function()	{
	var valor = $(this).val();
	if (valor == 'arrendatario') {
		 $('#uno').css('display','block');
		 $('#dos').css('display','none');
		 $('#tres').css('display','none');
	}else if (valor == 'guarda') {
		 $('#uno').css('display','none');
		 $('#tres').css('display','none');
		 $('#dos').css('display','block');
	}else if (valor == 'propietario') {
		 $('#uno').css('display','none');
		 $('#dos').css('display','none');
		 $('#tres').css('display','block');
	};
	});
	$("#cedula, #nombre, #telefono").bind('blur keyup', function(){
		if($(this).val() != "") {
			$(".error").fadeOut(300);
		};
	})
	$("#email").bind('blur keyup', function(){
		var v_email = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if ($(this).val() != "" && v_email.test($("#email").val())) {
			$(".error").fadeOut(300);
		};
	});
});
function Mostrar(parametro){
		if (parametro.rol.selectedIndex==1) {
			parametro.direccion.style.visibility='visible';
			parametro.casa.style.visibility='hidden';
		}else if(parametro.rol.selectedIndex==0){
			parametro.direccion.style.visibility='hidden';
			parametro.casa.style.visibility='visible';
		}else if(parametro.rol.selectedIndex==2){
			parametro.direccion.style.visibility='hidden';
			parametro.casa.style.visibility='visible';
		};
};
