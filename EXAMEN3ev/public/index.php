<?php
require "./../src/Conexion.php";
require "./../src/Proyecto.php";

$p=new Proyecto();
if(isset($error)){
     if($error===false){
       $p->conectar();
       $resultado=$p->listarProyecto();
     }
 }


 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>REGISTRO DE TRBAJADOR</h1>
    <form  action="registro.php" method="post">
      <br>Nombre<br>
      <input type="text" name="nombre" id="nombre" value="">
      <br>Apellidos <br>
      <input type="text" name="apellidos" id="apellidos" value="">
      <br>Precio Hora <br>
      <input type="text" name="precio_hora" id="precio_hora" value=""><br><br>
      <br>Descripción <br>
      <?php

      foreach ($resultado as $proyecto){
       echo "<tr>";
       echo "<td>" .$proyecto['id']."</td>";
       echo "<td>" .$proyecto['nombre']."</td>";
       echo "</tr>";
     }
       ?>
      <br><br>
      <input type="submit" id="enviar" value="Registrar" onclick="return comp();">
    </form>
  </body>
  <script type="text/javascript" src="js/comprobar.js">
  </script>
</html>
