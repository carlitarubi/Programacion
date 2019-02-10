<link href="estilo.css" rel="stylesheet" type="text/css">
<?php
$conexion=new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $resultado = $conexion->query("SELECT id_partido, resultado, fecha FROM partido");
}
 ?>
 <table align='center'>
   <tr>
     <th>ID</th>
     <th>Resultado</th>
     <th>Fecha</th>
  </tr>
    <?php
    foreach ($resultado as $partido){
     echo "<tr>";
      echo "<td>" .$partido['id_partido']."</td>";
     echo "<td>" .$partido['resultado']."</td>";
     echo "<td>" .$partido['fecha']."</td>";
     echo "</tr>";
   }
     ?>
 </table>
