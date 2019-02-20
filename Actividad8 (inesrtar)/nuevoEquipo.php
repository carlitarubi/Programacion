<?php
$conexion=new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $id_equipo=$_POST["id"];
  $nombre=$_POST["nombre"];
  $ciudad=$_POST["ciudad"];
  $web=$_POST["web"];
  $puntos=$_POST["puntos"];
  $consulta="INSERT INTO equipo (id_equipo,nombre,ciudad,web,puntos) VALUES ('".$id_equipo."', '".$nombre."', '".$ciudad."', '".$web."', '".$puntos."')";

  $resultado = $conexion->query($consulta);
  if($resultado==false){
    echo $conexion->error;
  }else{
  echo "Inserción Correcta";
  }
    $resultado = $conexion->query("SELECT id_equipo,nombre,ciudad,web,puntos FROM equipo");
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
        <th>Ciudad</th>
        <th>Web</th>
        <th>Puntos</th>
     </tr>
       <?php
       foreach ($resultado as $equipo){
        echo "<tr>";
        echo "<td>" .$equipo['id_equipo']."</td>";
        echo "<td>" .$equipo['nombre']."</td>";
        echo "<td>" .$equipo['ciudad']."</td>";
        echo "<td>" .$equipo['web']."</td>";
        echo "<td>" .$equipo['puntos']."</td>";
        echo "</tr>";
      }
        ?>
   </table>
  </body>
</html>
