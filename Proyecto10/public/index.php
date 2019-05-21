<?php
include "./assets/sesion.php";
require "./../src/Conexion.php";
require "./../src/Usuario.php";
$j=new Usuario();
$j->conexion();
$resultado=$j->idUsuario();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/juego.css">
  </head>
  <body>
    <?php include "./assets/sesion.php"; ?>
    <?php include "./assets/navSub.php"; ?>

    <br>
    <?php
    foreach ($resultado as $jugador) {
      echo "<b>Usuario Conectado: </b>";
      echo "<b>".$jugador['nombre']."</b>";
      }
     ?>

    <?php include "./assets/footer.html"; ?>
  </body>
</html>
