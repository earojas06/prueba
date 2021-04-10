     $(function(){
      $("td[class=d]").blur(function(){
        var id = $(this).attr("id");
        var valores = $(this).text();
        var extraervalores = id.split(':');
        var campo = extraervalores[0];
        var identificador = extraervalores[1];
        alert(identificador)
        if (valores == "") {
			$('.mensajes').slideDown(500).html("El campo "+campo+" No puede estar vacio").delay(3000).slideUp(600);	
        }else{
        $.ajax({
          type: "POST",
          url: "actualizar_registro.php",
          data: "textoactualizado="+valores+"&cedula="+identificador+"&campo="+campo,
          success: function(res){
			$('.mensajes').slideDown(500).html(res);	
			return false;
          }
        })
        }
      });
    });
     