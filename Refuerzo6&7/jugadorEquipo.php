<link href="estilo.css" rel="stylesheet" type="text/css">
<?php
$conexion=new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $equipo=$_GET["equipo"];
  $resultado = $conexion->query("SELECT nombre FROM jugador where equipo=".$equipo);
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
        <th>Jugadores</th>
      </tr>
      <?php
      foreach ($resultado as $jugador){
       echo "<tr>";
       echo "<td>" .$jugador['nombre']."</td>";
       echo "</tr>";
     }
       ?>
    </table>
  </body>
</html>
