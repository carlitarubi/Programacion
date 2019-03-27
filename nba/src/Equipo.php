<?php
class Equipo
{
  private $conexion=null;

  function __construct(){
  }

  function conexion(){
    $this->conexion=new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
        echo "fallo al conectar MySql: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
      }else{
        $resultado=$this->conexion->query("SELECT * from jugadores");
      }
    }




public function comprobarCampos($post){
$error=null;
  if(!isset($post)||!isset($post["codigo"])||!isset($post["Nombre"])||!isset($post["Peso"])){
    $error="";
  }elseif($post["codigo"]==""){
    $error="No has introducido el codigo";
  }elseif($post["Nombre"]==""){
    $error="No has introducido el Nombre";
  }elseif($post["Peso"]==""){
    $error="No has introducido el Peso";
  }else{
    $error=false;
    $this->codigo=$post["codigo"];
    $this->nombre=$post["Nombre"];
    $this->peso=$post["Peso"];
  }
  return $error;
}
}
 ?>
