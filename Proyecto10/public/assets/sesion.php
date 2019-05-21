<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("Location: http://localhost/proyecto/public/login.php");
}
?>
