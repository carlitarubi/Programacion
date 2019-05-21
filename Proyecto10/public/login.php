<?php
session_start();
require "./../src/Conexion.php";
require "./../src/Usuario.php";
  $j=new Usuario();
  $j->conexion();
  $resultado=$j->listarUsuarios();
  ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <p>Usuario</p>
    <form class="" action="login.php" method="post">
      <select name="usu">
      <?php
        foreach ($resultado as $usuario) {
          echo "<option value=".$usuario['id'].">".$usuario['nombre']."</option>";
        }
        $_SESSION['usuario'] = $_POST['usu'];
      ?>
      </select>
    <input type="submit" value="ENVIAR">

    </form>

    <?php
    if(isset($_SESSION["usuario"])){
    header("Location: http://localhost/proyecto/public/index.php");
  }

    ?>
  </body>
</html>
