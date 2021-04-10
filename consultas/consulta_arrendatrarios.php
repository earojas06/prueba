<?php 
  require ("../global/conexion.php")
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="../css/css_estilos_tablas.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/v_actualizacion_registros.js"></script>
    <script language="javascript">
    function doSearch()
    {
      var tableReg = document.getElementById('buscar');
      var searchText = document.getElementById('searchTerm').value.toLowerCase();
      var cellsOfRow="";
      var found=false;
      var compareWith="";
      
      // Recorre todas las filas con contenido de la tabla
      for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
        found = false;
        // Recorre todas las celdas
        for (var j = 0; j < cellsOfRow.length && !found; j++)
        {
          compareWith = cellsOfRow[j].innerHTML.toLowerCase();
          // Busca el texto en el contenido de la celda
          if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
          {
            found = true;
          }
        }
        if(found)
        {
          tableReg.rows[i].style.display = '';
        } else {
          // si no ha encontrado ninguna coincidencia, esconde la
          // fila de la tabla
          tableReg.rows[i].style.display = 'none';
        }
      }
    }
  </script>

 </head>
 <body>

  <div class="mensajes"></div>
<div class="buscar"> Buscar: <input id="searchTerm" type="text" onkeyup="doSearch()" autocomplete="off" /></div>
  <div class="Tabla">
 <table class="Tabla" id="buscar">
    <tr>
      <td>Cedula</td>
      <td>Nombre</td>
      <td>Telefono</td>
      <td>Genero</td>
      <td>Rh</td>
      <td>Email</td>
      <td>Casa</td>
      <td>Rol</td>
      <td>Editar</td>
    </tr>
    <tr>
    </div>
    <?php 
    $consulta = $conexion -> query("SELECT arrendatarios.* , casas.* FROM arrendatarios, casas, r_casa_arrendatario WHERE arrendatarios.cedula = r_casa_arrendatario.id_arrendatario AND casas.id = r_casa_arrendatario.id_casa");      
    while ($res = mysqli_fetch_row($consulta)) {
        echo "
      <form action='../consultas/actualizar_registro_personas.php' method='POST'>
      <td><input type='text' id='cedula' readonly value='$res[0]' name='cedula'></td>
      <td >$res[1]</td>
      <td>$res[2]</td>
      <td>$res[3]</td>
      <td>$res[4]</td>
      <td>$res[5]</td>  
      <td><input type='text' id='casa' readonly value='$res[10]' name='casa'></td>
      <td>$res[7]</td>
      <td><input type='submit' id='boton_editar' class='boton_editar' value='Editar'></td>
    </tr>
    </form>
    ";
      }
     ?>
  </table>   
 </body>
 </html>
