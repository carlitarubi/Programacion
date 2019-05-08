<?php
require "./../src/Conexion.php";
require "./../src/Trabajador.php";

$t=new Trabajador();
$error=$t->comprobarCampos($_POST);


if(isset($error)){
     if($error===false){
       $t->conectar();

       $t->insertarAsistente();
     }
 }

 $conexion=new mysqli("localhost", "root", "", "proyectos");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $nombre=$_POST["nombre"];
  $apellidos=$_POST["apellidos"];
  $precio_hora=$_POST["precio_hora"];
  $consulta="INSERT INTO trabajador (nombre,apellidos,precio_hora) VALUES ('".$nombre."', '".$apellidos."', '".$precio_hora."')";

  $resultado = $conexion->query($consulta);
  if($resultado==false){
    echo $conexion->error;
  }else{
  echo "Inserción Correcta";
  }
    $resultado = $conexion->query("SELECT id,nombre,apellidos,precio_hora FROM trabajador");
}

 ?>
