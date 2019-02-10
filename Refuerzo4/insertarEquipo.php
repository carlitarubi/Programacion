<link href="actividad3.css" rel="stylesheet" type="text/css">
<?php
$conexion=new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $resultado = $conexion->query("INSERT INTO `equipo`(`id_equipo`,`nombre`,`ciudad`,`web`,`puntos`) VALUES (9,`Melon`,`real melon`,`www.google.com`,23)");
	$resultado2 = $conexion->query("SELECT * from equipo order by id_equipo desc limit=1");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href='actividad3.php' align='center'>Inicio</a><br>
    <?php
    foreach ($resultado2 as $jugador) {
     echo $jugador['nombre']." ".$jugador['ciudad']." ".$jugador['id_equipo']."<br>";
   }
     ?>
  </body>
</html>



<!-- " ".$jugador['web']." ".$jugador['puntos']. -->


<!-- $jugador['id_equipo']." ". -->
