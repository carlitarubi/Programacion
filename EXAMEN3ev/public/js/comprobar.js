function comp(){
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let precio_hora=document.getElementById('precio_hora').value;
  let error=true;

  if(nombre==""){
    alert("Falta el Nombre");
    error=false;
  }
  if(apellidos==""){
    alert("Falta el Apellidos");
    error=false;
  }
  if(precio_hora==""){
    alert("Falta el Precio");
    error=false;
  }

  return error;
}
