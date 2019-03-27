<?php
require "./../src/Jugador.php";

$j=new Jugador();
$error=$j->comprobarCampos($_POST);


if(isset($error)){
     if($error===false){
       // 'NO HAY ERROR'
       $j->conexion();

       $j->insertarJugador();
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
    <form class="formnba" action="nuevoJugador.php" method="post" >
      <div class="grupoFormItem">
        <label for="codigo">Codigo</label>
        <input type="text" name="codigo" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Peso">Peso</label>
        <input type="text" name="Peso" value="">
      </div>
        <input type="submit" name="enviar" value="Insertar">
    </form>
  </body>
</html>
