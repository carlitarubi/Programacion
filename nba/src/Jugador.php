<?php
class Jugador
{
  private $conexion=null;

  public $codigoExterno;
  private $codigo;
  private $nombre;
  private $peso;

  function __construct(){

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

  function conexion(){
  $this->conexion=new mysqli("localhost", "root", "", "nba");
if ($this->conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
  }
}

public function listarJugador(){
  $consulta="select * from jugadores";
  $resultado=$this->conexion->query($consulta);
  return $resultado;
}

public function insertarJugador(){
  $consulta="insert into jugadores (codigo, Nombre, Procedencia, Altura, Peso, Posicion, Nombre_equipo)
              VALUES ('$this->codigo','$this->nombre',NULL,null,'$this->peso',null,null)";
  $this->conexion->query($consulta);
}



// public setCodigo($numero){
//   if ($numero>0)  $this->codigo=numero;
// }
//
// public getCodigo(){
//   return $this->codigo;
// }


}

?>
