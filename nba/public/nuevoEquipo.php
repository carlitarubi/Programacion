<?php
require "./../src/Equipo.php";

$e=new Equipo();
$error=$e->comprobarCampos($_POST);


if(isset($error)){
     if($error===false){
       // 'NO HAY ERROR'
       $e->conexion();

       $e->insertarEquipo();
     }
 }

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/nba.css">
  </head>
  <body>
    <?php include "./assets/navSub.php"; ?>
    <?php
    if(isset($error)){
      if($error!="") echo "<h4>ERROR:$error</h4>";
    }
     ?>

    <h2>Crear nuevo usuario</h2><br>
    <form class="formnba" action="nuevoEquipo.php" method="post" >
      <div class="grupoFormItem">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Ciudad">Ciudad</label>
        <input type="text" name="Ciudad" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Conferencia">Conferencia</label>
        <input type="text" name="Conferencia" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Division">Division</label>
        <input type="text" name="Division" value="">
      </div>
        <input type="submit" name="enviar" value="Insertar">
    </form>
  </body>
</html>
