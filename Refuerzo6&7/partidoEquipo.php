<link href="estilo.css" rel="stylesheet" type="text/css">
<?php
$conexion=new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $idEquipo=$_GET["equipo"];
  $resultado = $conexion->query("SELECT resultado FROM partido where local=".$idEquipo);
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="jugador" align='center'>
      <tr>
        <th>Partidos</th>
      </tr>
      <?php
      foreach ($resultado as $partido){
       echo "<tr>";
       echo "<td>" .$partido['resultado']. "</td>";
       echo "</tr>";
     }
       ?>
    </table>
  </body>
</html>
