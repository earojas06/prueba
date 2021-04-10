$(function(){
	$("#enviar").click(function(){

		//NO es necesario guardar lo datos en variables
		var cedula = document.getElementById('cedula').value,
			nombre = document.getElementById('nombre').value,
			telefono = document.getElementById('telefono').value;
			//oculata y da un valor de 0 al mensaje de error 
			$(".error").fadeOut().remove();
			//Valida cada campo del formulario .....
			if (cedula == "" ) {
				$("#cedula").focus().after('<span class="error">El campo Identificación NO puede estar vacio</span>');
				return false;
			};
			// length tambien sirve para contar los caracteres de los campos 
			if (cedula.length > 10 ) {
				$("#cedula").focus().after('<span class="error">El campo cedula NO puede tener mas de 10 digitos</span>');
				return false;
			};
			if (nombre == "") {
				$("#nombre").focus().after('<span class="error">El campo nombre NO puede estar vacio</span>');
				return false;
			};
			if (telefono == "") {
				$("#telefono").focus().after('<span class="error">El campo telefono NO puede estar vacio</span>');
				return false;
			};
			/*if (fecha_ingreso == "") {
				$("#fecha_ingreso").focus().after('<span class="error">El campo fecha ingreso NO puede estar vacio</span>');
				return false;
			};
			if (hora_ingreso == "") {
				$("#hora_ingreso").focus().after('<span class="error">La hora de ingreso NO puede estar vacia</span>');
				return false;
			};
			if (fecha_salida == "") {
				$("#fecha_salida").focus().after('<span class="error">El campo fecha salida NO puede estar vacio</span>');
				return false;
			};
			if (hora_salida == "") {
				$("#hora_salida").focus().after('<span class="error">La hora de salida NO puede estar vacia</span>');
				return false;
			};

				// Date.parse convierte los valores de fecha en 
			//Un formato valido javascript
			fecha_salida_set = Date.parse(fecha_salida);
			fecha_ingreso_set = Date.parse(fecha_ingreso);
			// Validacion aparte para que una fecha no sea mayor 
			//otra.
			var f = new Date();
			set = Date.parse(f);
			if (fecha_ingreso_set >= set) {

			}else if (fecha_ingreso_set < set) {
				$("#fecha_ingreso").focus().after('<span class="error">La fecha de ingreso no puede ser menor a la actual</span>');
				return false;
			};

			if (fecha_ingreso_set < fecha_salida_set) {
			}else if (fecha_ingreso_set > fecha_salida_set) {
				$("#fecha_salida").focus().after('<span class="error">Esta Fecha de salida no puede ser menor a la de entrada</span>');
				return false;
				if (hora_ingreso > hora_salida) {
				$("#hora_salida").focus().after('<span class="error">La hora de ingreso no puede ser mayor a la de salida</span>');
				return false;
			};
			};*/
			
	});
	$("#cedula, #nombre, #telefono").bind('blur keyup', function(){
		if($(this).val() != "") {
			$(".error").fadeOut(300);
		};
	})

});