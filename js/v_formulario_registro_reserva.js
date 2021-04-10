$(function (){
	$("#enviar").click(function(){
		var fecha = document.getElementById('fecha').value,
			hora_inicio = document.getElementById('hora_inicio').value,
			hora_entrega = document.getElementById('hora_entrega').value,
			motivo = document.getElementById('motivo').value,
			f = new Date();
			set = Date.parse(f);
		fecha_set = Date.parse(fecha);
		$(".error").fadeOut().remove();
		if (fecha == "") {
			$("#fecha").focus().after('<span class="error">El campo fecha NO puede estar vacio</span>');
			return false;
		}else if (fecha_set < set) {
			$("#fecha").focus().after('<span class="error">La fecha ingresada no puede ser menor a la fecha actual</span>');
			return false;
		}else  if (hora_inicio == "") {
			$("#hora_inicio").focus().after('<span class="error">El campo de hora de inicio NO estar vacio</span>');
			return false;
		}else if (hora_entrega == "") {
			$("#hora_entrega").focus().after('<span class="error">El campo de hora de entrega NO estar vacio</span>');
			return false;
		}else if (hora_inicio > hora_entrega ) {
			$("#hora_entrega").focus().after('<span class="error">La hora de entrega NO puede ser msyor a la de inicio</span>');
			return false;
		}else if (motivo == "") {
			$("#motivo").focus().after('<span class="error">El campo motivo no puede estar vacio</span>');
			return false;
		};
	})

})
