<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="listadoUsuarios.php" method="post" onsubmit="return comprobar();">
      <label for="id">ID</label>
      <input type="text" id="id" name="id" value="" required>
      <br><br>
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" value="" required>
      <br><br>
      <label for="apellidos">Apellido</label>
      <input type="text" id="apellidos" name="apellidos" value="" required>
      <br><br>
      <label for="edad">Edad</label>
      <input type="text" id="edad" name="edad" value="" required>
      <br><br>
      <label for="curso">Curso</label>
      <input type="text" id="curso" name="curso" value="" required>
      <br><br>
      <label for="puntos">Puntuación</label>
      <input type="text" id="puntos" name="puntos" value="" required>
      <br><br>
      <input type="submit" id="enviar" value="Enviar">
    </form>
    <script type="text/javascript">
    function comprobar(){
    let id=document.getElementById('id').value;
    let nombre=document.getElementById('nombre').value;
    let apellidos=document.getElementById('apellidos').value;
    let edad=document.getElementById('edad').value;
    let curso=document.getElementById('curso').value;
    let puntos=document.getElementById('puntos').value;
    console.log(nombre);
    console.log(nombre.length);

    if (id.length == 0 || nombre.length == 0 || apellidos.length == 0 || edad.length == 0 || curso.length == 0 || puntos.length == 0){
      alert ("Completar todos los campos");
      return false;
    }else if (isNaN(id)||isNaN(edad)||isNaN(puntos)){
      alert ("El campo numero es un texto");
      return false;
      }else{
        return true;
      }
    }
    </script>
  </body>
</html>
