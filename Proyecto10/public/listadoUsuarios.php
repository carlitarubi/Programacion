
<?php
include "./assets/sesion.php";
require "./../src/Conexion.php";
require "./../src/Usuario.php";

$e=new Usuario();
$error=$e->comprobarCampos($_POST);


if(isset($error)){
     if($error===false){
       // 'NO HAY ERROR'
       $e->conexion();

       $e->insertarEquipo();
     }
 }

$conexion=new mysqli("localhost", "root", "", "juego");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $id=$_POST["id"];
  $nombre=$_POST["nombre"];
  $apellidos=$_POST["apellidos"];
  $edad=$_POST["edad"];
  $curso=$_POST["curso"];
  $puntos=$_POST["puntos"];
  $consulta="INSERT INTO usuario (id,nombre,apellidos,edad,curso,puntuacion) VALUES ('".$id."', '".$nombre."', '".$apellidos."', '".$edad."', '".$curso."','".$puntos."')";

  $resultado = $conexion->query($consulta);
  if($resultado==false){
    echo $conexion->error;
  }else{
  echo "Inserción Correcta";
  }
    $resultado = $conexion->query("SELECT id,nombre,apellidos,edad,curso,puntuacion FROM usuario");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/juego.css">
  </head>
  <body>
    <table align='center'>
      <tr>
        <th>ID</th>º
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Curso</th>
        <th>Puntuación</th>
     </tr>
       <?php
       foreach ($resultado as $usuario){
        echo "<tr>";
        echo "<td><a href=../6/juego.php?usuario=".$usuario['id'].">" .$usuario['id']."</td>";
        echo "<td>" .$usuario['nombre']."</td>";
        echo "<td>" .$usuario['apellidos']."</td>";
        echo "<td>" .$usuario['edad']."</td>";
        echo "<td>" .$usuario['curso']."</td>";
        echo "<td>" .$usuario['puntuacion']."</td>";

        echo "</tr>";
      }
        ?>
   </table>
  </body>
</html>
