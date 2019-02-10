<link href="estilo.css" rel="stylesheet" type="text/css">
<?php
$conexion=new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $resultado = $conexion->query("SELECT id_jugador,nombre,apellido ,altura FROM jugador");
}
 ?>
 <table align='center'>
   <tr>
     <th>ID</th>
     <th>Nombre</th>
     <th>Altura</th>
  </tr>
    <?php
    foreach ($resultado as $jugador){
     echo "<tr>";
      echo "<td>" .$jugador['id_jugador']."</td>";
     echo "<td>" .$jugador['nombre']."</td>";
     echo "<td>" .$jugador['altura']."</td>";
     echo "</tr>";
   }
     ?>
</table>
