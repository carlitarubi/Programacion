<?php

class Conexion{
  public $conexion=null;

  private $servidor;
  private $bbdd;
  private $usuario;
  private $password;

  function __construct()
  {

  }

  public function setservidor($servidor){
    $this-> servidor=$servidor;
  }

  public function getservidor(){
        return $this -> servidor;
  }

  public function setbbdd($bbdd){
    $this-> bbdd=$bbdd;
  }

  public function getbbdd(){
        return $this -> bbdd;
  }

  public function setusuario($usuario){
    $this-> usuario=$usuario;
  }

  public function getusuario(){
        return $this -> usuario;
  }

  public function setpassword($password){
    $this-> password=$password;
  }

  public function getpassword(){
        return $this -> password;
  }


      public function conexion(){
      $this->conexion=new mysqli("localhost", "root", "", "juego");
    if ($this->conexion->connect_errno) {
      echo "fallo al conectar MySql: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
      }
    }
}

 ?>
