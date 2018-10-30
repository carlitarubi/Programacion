
var tablero='';
var n=Number(prompt("Especifica el numero de FILA al que ir."));
var m=Number(prompt("Especifica el numero de COLUMNA al que ir."));

function calTablero(n,m){
  if (n<1 || n>6 || m<1 || m>6) {
      console.log(`False`);
    }else{
    console.log(`True`);
  }
}
// function calTablero(n,m){
//   while {
//     console.log(`False`);
//   }while (n>=1 || n<=6 || m>=1 || m<=6){
//     console.log(`True`);
//   }
// }

  // var tablero=calTablero(n,m);
  console.log(calTablero(n,m));
