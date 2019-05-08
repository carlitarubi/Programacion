<?php
class Proyecto extends Conexion
{

  private $id;
  private $nombre;
  function __construct()
  {

  }

  public function listarProyecto(){
  $consulta="SELECT * FROM proyecto";
  $resultado=$this->conexion->query($consulta);
  return $resultado;
    }
}

 ?>
