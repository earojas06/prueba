    $(function(){
      $("td[contenteditable=true]").blur(function(){
        var id = $(this).attr("id");
        var valores = $(this).text();
        var extraervalores = id.split(':');
        var campo = extraervalores[0];
        var identificador = extraervalores[1];
        if (valores == "") {
			$('.mensajes').slideDown(500).html("El campo "+campo+" No puede estar vacio").delay(3000).slideUp(600);	
        }else{
        $.ajax({
          type: "POST",
          url: "actualizar_respuesta_reservas.php",
          data: "textoactualizado="+valores+"&id="+identificador+"&campo="+campo,
          success: function(res){
			$('.mensajes').slideDown(500).html(res);	
			return false;
          }
        })
        }
      });
  });