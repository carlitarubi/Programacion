<?php
class Equipo
{
  private $conexion=null;

  function __construct(){
  }

  public function comprobarCampos($post){
  $error=null;
    if(!isset($post)||!isset($post["Nombre"])||!isset($post["Ciudad"])||!isset($post["Conferencia"])||!isset($post["Division"])){
      $error="";
    }elseif($post["Nombre"]==""){
      $error="No has introducido el nombre";
    }elseif($post["Ciudad"]==""){
      $error="No has introducido la ciudad";
    }elseif($post["Conferencia"]==""){
      $error="No has introducido la conferencia";
    }elseif($post["Division"]==""){
      $error="No has introducido la division";
    }else{
      $error=false;
      $this->nombre=$post["Nombre"];
      $this->ciudad=$post["Ciudad"];
      $this->conferencia=$post["Conferencia"];
      $this->division=$post["Division"];
    }
    return $error;
  }
  function conexion(){
    $this->conexion=new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
        echo "fallo al conectar MySql: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
      }else{
        $resultado=$this->conexion->query("SELECT * from equipos");
      }
    }





public function insertarEquipo(){
  $consulta="insert into equipos (Nombre, Ciudad, Conferencia, Division)
              VALUES ('$this->nombre','$this->ciudad','$this->conferencia','$this->division')";
  $this->conexion->query($consulta);
}
}
 ?>
