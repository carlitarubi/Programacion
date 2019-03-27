<?php
require "./../src/Jugador.php";

$e=new Jugador();
$resultado=$e->listarJugador();
$conexion=conexion();

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
       if(isset($error)){
         if($error!="") echo "<h4>ERROR:$error</h4>";
       }
      ?>

      <table align='center'>
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
     foreach ($resultado as $jugador){
      echo "<tr>";
      echo "<td>" .$jugador['codigo']."</td>";
      echo "<td>" .$jugador['nombre']."</td>";
      echo "<td>" .$jugador['procedencia']."</td>";
      echo "<td>" .$jugador['altura']."</td>";
      echo "<td>" .$jugador['peso']."</td>";
      echo "<td>" .$jugador['posicion']."</td>";
      echo "<td>" .$jugador['equipo']."</td>";

      echo "</tr>";
    }
      ?>
 </table>
   </body>
 </html>
