var cartaB=0;
var cartaJ=0;
function randCartaB(min,max) {
  cartaB=Math.round(Math.random()*(max - min) + min);
    return cartaB
}

function randCartaJ(min,max) {
  cartaJ=Math.round(Math.random()*(max - min) + min);
    return cartaJ
}

randCartaJ(1,12);
randCartaB(1,12);

var msn=document.getElementById('cartaJugador');
msn.innerHTML="Tu carta es el numero "+cartaJ;




var pregunta=prompt("Tu carta es mayor o menor que la de la banca?");

if (pregunta=="mayor" || pregunta=="menor"){
  var msn=document.getElementById('cartaBanca');
  msn.innerHTML="La carta que habia que adivinar es "+cartaB;

  comprobar();
}else{
  var msn=document.getElementById('cartaJugador');
  msn.innerHTML='Tienes que escribir "menor" o "mayor"';
}

function comprobar(){
    if (cartaJ<cartaB){
      if(pregunta=="menor"){
        var msn=document.getElementById('puntuacion');
        msn.innerHTML="Acertaste :D";
      }else{
        var msn=document.getElementById('puntuacion');
        msn.innerHTML="Fallaste :(";
      }
    }
      if(pregunta=="mayor"){
        var msn=document.getElementById('puntuacion');
        msn.innerHTML="Acertaste :D";
      }else{
        var msn=document.getElementById('puntuacion');
        msn.innerHTML="Fallaste :(";
    }
  }
