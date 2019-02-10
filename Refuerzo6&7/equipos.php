<link href="estilo.css" rel="stylesheet" type="text/css">
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
   </head>
   <body>
     <table align='center'>
       <tr>
         <th>ID</th>
         <th>Nombre</th>
         <th>Puntos</th>
         <th>Jugadores</th>
         <th>Resultado</th>
      </tr>
        <?php
        foreach ($resultado as $equipo){
         echo "<tr>";
          echo "<td>" .$equipo['id_equipo']."</td>";
         echo "<td>" .$equipo['nombre']."</td>";
         echo "<td>" .$equipo['puntos']."</td>";
         echo "<td><a href=jugadorEquipo.php?equipo=".$equipo['id_equipo'].">Jugadores</a></td>";
         echo "<td><a href=partidoEquipo.php?equipo=".$equipo['id_equipo'].">Resultado partidos</a></td>";
         echo "</tr>";
       }
         ?>
    </table>
   </body>
 </html>
