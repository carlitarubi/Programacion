<?php
$conexion=new mysqli("localhost", "root", "", "juego");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $resultado = $conexion->query("SELECT * FROM usuario");

}
 ?>
  <div class=""> <button>Inicio</button></div>
 <table class='table.striped' border="1">
   <tr>
     <th>ID</th>
     <th>Nombre</th>
     <th>Apellido</th>
     <th>Edad</th>
     <th>Curso</th>
     <th>Puntuación</th>
   </tr>
   <?php
   foreach ($resultado as $usuarios){
   echo "<tr>";
   echo "<td>" .$usuarios['id']."</td>";
   echo "<td>" .$usuarios['nombre']."</td>";
   echo "<td>" .$usuarios['apellidos']."</td>";
   echo "<td>" .$usuarios['edad']."</td>";
   echo "<td>" .$usuarios['curso']."</td>";
   echo "<td>" .$usuarios['puntuacion']."</td>";
   echo "</tr>";
   }
    ?>
 </table>
