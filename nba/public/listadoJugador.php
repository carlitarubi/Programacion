<?php
require "./../src/Jugador.php";

$j=new Jugador();
$conexion=$j->conexion();


 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="./css/nba.css">
   </head>
   <body>
     <?php
     include "./assets/navSub.php";
       // listarJugador();

      ?>

      <table align='center' border=1>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Procedencia</th>
      <th>Altura</th>
      <th>Peso</th>
      <th>Posición</th>
      <th>Equipo</th>
   </tr>
     <?php
     $resultado=$j->listarJugador();
      ?>
 </table>
   </body>
 </html>
