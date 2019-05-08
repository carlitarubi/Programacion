<?php

class Conexion{
  private $conexion=null;

  function __construct()
  {

  }
  public function conectar(){
        $this->conexion=new mysqli("localhost", "root", "", "proyectos");
      if ($this->conexion->connect_errno) {
        echo "fallo al conectar MySql: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
        }
      }
  }

   ?>
