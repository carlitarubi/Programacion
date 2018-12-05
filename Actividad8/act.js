var cartaB=0;
var cartaJ=0;
var puntuacion=0;

function randCartaB(min,max) {
  cartaB=Math.round(Math.random()*(max - min) + min);
    return cartaB
}

function randCartaJ(min,max) {
  cartaJ=Math.round(Math.random()*(max - min) + min);
    return cartaJ
}





while(pregunta !="salir"){
  randCartaJ(1,12);
  randCartaB(1,12);
  var pregunta=prompt("Tu carta es mayor o menor que la de la banca?");
    if (pregunta=="mayor" || pregunta=="menor"){
      comprobar();
      var msn=document.getElementById('cartaJugador');
      msn.innerHTML="Tu carta es el numero "+cartaJ;

      var msn=document.getElementById('cartaBanca');
      msn.innerHTML="La carta que habia que adivinar es "+cartaB;

    }
  }




function comprobar(){
    if (cartaJ<cartaB){
      if(pregunta=="menor"){
        puntuacion=puntuacion+1;
        var msn=document.getElementById('puntuacion');
        msn.innerHTML="Tu puntuacion es de " + puntuacion;
      }else{
        puntuacion=puntuacion-1;
        var msn=document.getElementById('puntuacion');
        msn.innerHTML="Tu puntuacion es de "+puntuacion;
      }
    }
      if(pregunta=="mayor"){
        puntuacion=puntuacion+1;
        var msn=document.getElementById('puntuacion');
        msn.innerHTML="Tu puntuacion es de "+puntuacion;
      }else{
        puntuacion=puntuacion-1;
        var msn=document.getElementById('puntuacion');
        msn.innerHTML="Tu puntuacion es de "+puntuacion;
    }
    console.log("Tu carta "+randCartaJ(1,12));
    console.log("La que se adivina "+randCartaB(1,12));
    console.log(puntuacion);


  }
