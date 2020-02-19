<?php

   $nombre = $_POST["nombre"];
   $direccion = $_POST["direccion"];


   echo  '<table>';
   echo     '<tbody>';
      echo     '<tr>';
      echo        '<form method="post">';      
      echo           '<td> <a class="waves-effect waves-light btn-small" onclick="ver_permisos('. "'$direccion'".','."'$nombre'" .')">Ver info. permisos</a> </td>';
      echo        '</form>';      
      echo     '</tr>';
      echo     '<tr>';
      echo        '<td> <a class="waves-effect waves-light btn-small">Cambiar propietario</a> </td>';
      echo     '</tr>';
   echo     '</tbody>';
   echo ' </table>  ';
   echo  '<form method="POST" class="formulario">';
   echo     '<input type="text" class="validate campo" id="rutaPegar" placeholder="Ruta para pegar">';
   echo     '<input type="button" class="btn waves-effect waves-light" value="Pegar" onclick="copiar_pegar('. "'$direccion'".','."'$nombre'" .');">';
   echo  '</form>';
   echo  '<form method="POST" class="formulario">';
   echo     '<input type="text" class="validate campo" id="nuevoNombre" placeholder="Nombre nuevo">';
   echo     '<input type="button" class="btn waves-effect waves-light" value="Cambiar Nombre" onclick="cambiar_nombre('. "'$direccion'".','."'$nombre'" .');">';
   echo  '</form>';
   echo  '<form method="POST" class="formulario">';
   echo     '<input type="text" class="validate campo" id="rutaMover" placeholder="Ruta para mover">';
   echo     '<input type="button" class="btn waves-effect waves-light" value="Mover" onclick="mover('. "'$direccion'".','."'$nombre'" .');">';
   echo  '</form>';
   echo  '<form method="POST" class="formulario">';
   echo  '   <input type="text" class="validate campo" id="nombreUser" placeholder="Nombre Propietario">';
   echo  '   <input type="button" class="btn waves-effect waves-light" value="Cambiar Propietario" onclick="cambiar_propietario('. "'$direccion'".','."'$nombre'" .');">';
   echo  '</form>';

   echo  '<form method="POST" class="formulario">';
   echo  '<table>';
   echo  '    <tbody>';
   echo  '        <tr>';
   echo  '            <td>  </td>';
   echo  '            <td> Read </td>';
   echo  '            <td> Write </td>';
   echo  '            <td> Execute </td>';
   echo  '       </tr>';
   echo  '        <tr>';
   echo  '            <td>  Usuario </td>';
   echo  '            <td> <label><input type="checkbox" class="with-gap checkFormulario" id="c00" /></label> </td>';
   echo  '            <td> <label><input type="checkbox" class="with-gap checkFormulario" id="c01" /></label> </td>';
   echo  '            <td> <label><input type="checkbox" class="with-gap checkFormulario" id="c02" /></label> </td>';
   echo  '        </tr>';
   echo  '        <tr>';
   echo  '            <td> Grupo </td>';
   echo  '            <td> <label><input type="checkbox" class="with-gap checkFormulario" id="c10" /></label> </td>';
   echo  '            <td> <label><input type="checkbox" class="with-gap checkFormulario" id="c11" /></label> </td>';
   echo  '            <td> <label><input type="checkbox" class="with-gap checkFormulario" id="c12" /></label> </td>';
   echo  '        </tr>';
   echo  '        <tr>';
   echo  '             <td> Otros </td>';
   echo  '             <td> <label><input type="checkbox" class="with-gap checkFormulario" id="c20" /></label> </td>';
   echo  '             <td> <label><input type="checkbox" class="with-gap checkFormulario" id="c21" /></label> </td>';
   echo  '             <td> <label><input type="checkbox" class="with-gap checkFormulario" id="c22" /></label> </td> '; 
   echo  '        </tr>';
   echo  '     </tbody>';
   echo  ' </table>';
   echo  ' <input type="button" class="btn waves-effect waves-light" value="Cambiar Permisos" onclick="cambiar_permisos('. "'$direccion'".','."'$nombre'" .');">';
   echo  ' </form>';

?>