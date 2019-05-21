<?php

class Usuario extends Conexion
{


  public $codigoExterno;
  private $id;
  private $nombre;
  private $apellido;
  private $edad;
  private $curso;
  private $puntuacion;

  function __construct(){

  }
  public function comprobarCampos($post){
    $error=null;
      if(!isset($post)||!isset($post["id"])||!isset($post["nombre"])||!isset($post["apellido"])||!isset($post["edad"])||!isset($post["curso"])||!isset($post["puntuacion"])){
        $error="";
      }elseif($post["id"]==""){
        $error="No has introducido el codigo";
      }elseif($post["nombre"]==""){
        $error="No has introducido el Nombre";
      }elseif($post["apellido"]==""){
        $error="No has introducido el Peso";
      }elseif($post["edad"]==""){
        $error="No has introducido el Peso";
      }elseif($post["curso"]==""){
        $error="No has introducido el Peso";
      }elseif($post["puntuacion"]==""){
        $error="No has introducido el Peso";
      }else{
        $error=false;
        $this->id=$post["id"];
        $this->nombre=$post["nombre"];
        $this->apellido=$post["apellido"];
        $this->edad=$post["edad"];
        $this->curso=$post["curso"];
        $this->puntuacion=$post["puntuacion"];
      }
      return $error;
    }

    public function comprobar(){

    if (isNaN(id)||isNaN(edad)||isNaN(puntos)){
      alert ("El campo numero es un texto");
      return false;
      }else{
        return true;
      }
    }

    public function idUsuario()
  {
    $id=$_SESSION['usuario'];
    $consulta=$this->conexion->query("SELECT id, nombre, puntuacion FROM usuario where id = $id ");
    return $consulta;
  }

    public function listarUsuarios(){
    $resultado=$this->conexion->query("SELECT id, nombre, apellidos, edad, curso, puntuacion FROM usuario");
    return $resultado;
  }


 ?>
