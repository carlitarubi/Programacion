<?php
require "./../src/Conexion.php";
require "./../src/Usuario.php";

$u=new Usuario();
$error=$u->comprobarCampos($_POST);


if(isset($error)){
     if($error===false){
       // 'NO HAY ERROR'
       $u->conexion();

       $u->insertarJugador();
     }
 }

 ?>

<!DOCTYPE html>
<?php include "./assets/navSub.php"; ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/juego.css">
  </head>
  <body>
    <form action="listadoUsuarios.php" method="post" >
      <label for="id">ID</label>
      <input type="text" id="id" name="id" value="">
      <br><br>
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" value="" required>
      <br><br>
      <label for="apellidos">Apellido</label>
      <input type="text" id="apellidos" name="apellidos" value="" required>
      <br><br>
      <label for="edad">Edad</label>
      <input type="text" id="edad" name="edad" value="" required>
      <br><br>
      <label for="curso">Curso</label>
      <input type="text" id="curso" name="curso" value="" required>
      <br><br>
      <label for="puntos">Puntuación</label>
      <input type="text" id="puntos" name="puntos" value="" required>
      <br><br>
      <input type="submit" id="enviar" value="Enviar">
      <input type="button" id="inicio" value="Inicio" href="index.php">
    </form>
    <?php
      $u->comprobarCampos();
      ?>


  </body>
</html>
