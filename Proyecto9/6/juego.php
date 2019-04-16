<?php
$conexion=new mysqli("localhost", "root", "", "juego");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $id_usuario=$_GET["usuario"];
  $resultado = $conexion->query("SELECT nombre,puntuacion FROM usuario where id=".$id_usuario);
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MICRO ROBOTS</title>
  </head>
  <body>
    <?php
    foreach ($resultado as $usuarios){
     echo "Jugador=" .$usuarios['nombre']."<br>";
     echo "Puntuación=" .$usuarios['puntuacion'];
    }
     ?>
    <div class=""><a href="jugadores.php"> <button>Jugadores</button></a></div>
    <br>
    <div class="contenedor2">
    <div class=""> <p>Movimientos realizados=</p> </div>
    <div class=""> <p>Numero Movimientos=</p></div></div>



    <script type="text/javascript">



    var fila=[[2,6,5,4,5,5],[4,6,6,3,2,6],[3,4,1,2,6,3],[1,4,2,5,6,1],[5,5,3,2,2,1],[4,1,4,3,1,3]];

    var color=[['#1BA4E7','yellow','#F3539E','#FA3939','yellow','#1BA4E7'],['#1BA4E7','white','#F3539E','#FA3939','yellow','#1BA4E7'],['#1BA4E7','yellow','#1BA4E7','#FA3939','#FA3939','#F3539E'],['#F3539E','white','#F3539E','#FA3939','#44C815','#FA3939'],['#44C815','white','#44C815','#44C815','white','yellow'],['#44C815','white','#F3539E','white','#44C815','yellow']];

    function inicioTablero(){
      document.write("<table align=center border='5' width='500' height='500'>");
      for (var j = 0; j < 6; j++) {
        document.write("<tr>");
        for (var i = 0; i < 6; i++) {
          document.write("<td onclick=\"pillarceldas(this)\" data-fila=\""+j+"\"data-columna=\""+i+"\"bgcolor=\""+color[j][i]+"\" align=center class='celda'>"+fila[j][i]+"</td>");
        }
        document.write("</tr>");
      }
      document.write("</table>");
    }
    inicioTablero();


    function pillarceldas(celda){
      console.log(celda.dataset.columna+","+celda.dataset.fila);

    }
      </script>
  </body>
</html>
