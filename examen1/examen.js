var tiempo=[]

 //1º Parte examen
  while (salir!="si") {
    var t=prompt("Cual es el tiempo?");
    if (t>0){
      tiempo.push(t);
    }
    var salir=prompt("Quieres salir (si/no)?");
}

//2º Parte examen
function mejor(){
  let numero=0;
  let marca=0;
  for (let i = 0; i < tiempo.length; i++) {
    numero=tiempo[i];
    if (marca<tiempo[i]){
      marca=tiempo[i];
    }
    mejorPunt=marca;
    return mejorPunt;
  }
}
function peor(){
  let numero=0;
  let marca=0;
  for (let i = 0; i < tiempo.length; i++) {
    numero=tiempo[i]
    if (marca<numero){
      marca=numero
    }
  }
  peorPunt=numero;
  return peorPunt;
}
function media(){
    let numero=0;
    let suma=0;
    for (let i = 0; i < tiempo.length; i++) {
      numero = tiempo[i];
      suma = suma + numero;
      media = suma/tiempo.length;
      return media;
    }

}
//3º Parte
mediaResultados=media();
mejorResultado=mejor();
peorResultado=peor();

console.log("El mejor resultado es "+mejorResultado+", el peor "+peorResultado+" y la media de todos los resultados es "+mediaResultados);
