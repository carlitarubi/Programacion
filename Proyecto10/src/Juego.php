<?php
class Juego extends Conexion
{
  private $id;
  private $nombre;

  function __construct()
  {

  }

  public function setid($id){
    $this-> id=$id;
  }

  public function getid(){
        return $this -> id;
  }

  public function setnombre($nombre){
    $this-> nombre=$nombre;
  }

  public function getnombre(){
        return $this -> nombre;
  }
}

 ?>
