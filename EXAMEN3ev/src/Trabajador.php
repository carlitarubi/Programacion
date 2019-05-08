<?php
class Trabajador extends Conexion
{
  private $conexion=null;

  private $id;
  private $nombre;
  private $apellido;
  private $precio_hora;
  function __construct()
  {

  }

  public function comprobarCampos($post){
  $error=null;
    if(!isset($post)||!isset($post["id"])||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["precio_hora"])){
      $error="";
    }elseif($post["id"]==""){
      $error="No has introducido el ID";
    }elseif($post["nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["apellidos"]==""){
      $error="No has introducido el Apellido";
    }elseif($post["precio_hora"]==""){
      $error="No has introducido el Precio";
    }else{
      $error=false;
      $this->id=$post["id"];
      $this->nombre=$post["nombre"];
      $this->apellidos=$post["apellido"];
      $this->precio_hora=$post["precio_hora"];
    }
    return $error;
  }
  public function insertarAsistente(){
  $consulta="insert into trabajador (id, nombre, apellidos, precio_hora)
              VALUES ('$this->id','$this->nombre','$this->apellidos','$this->precio_hora')";
  $this->conexion->query($consulta);
}
}

 ?>
