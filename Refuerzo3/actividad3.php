<?php
$conexion=new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $resultado = $conexion->query("SELECT id_equipo, nombre, puntos FROM equipo");
}
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
    <style type="text/css" media="all" src="materialize.css" ></style>
   </head>
   <body>
     <h3>Ejemplo BaseDatos Liga</h3>
     <h2>Jugadores</h2>
     <div class=""> <button align=right>Top Salarios</button></div><br>
     <div class=""> <button align=left>Inicio</button></div><br>

     <table class='table.striped' border="1">
       <tr>
         <th>ID</th>
         <th>Nombre</th>
         <th>Puntos</th>
      </tr>
      <tr>
        <?php
        foreach ($resultado as $jugador){
         echo "<tr>";
          echo "<td>" .$jugador['id_equipo']."</td>";
         echo "<td>" .$jugador['nombre']."</td>";
         echo "<td>" .$jugador['puntos']."</td>";
         echo "</tr>";
       }
         ?>

     </td>
     </tr>
    </table>


   </body>
 </html>
