var n=Number(prompt('Especifica el numero de FILA al que ir.'));
if (n>=1 && n<=6) {
  var m=Number(prompt('Especifica el numero de COLUMNA al que ir.'));
 }else{
    alert('Campo incorrecto, porfavor compruebe numero (1-6)');
  }if (m>=1 && m<=6){
    console.log(`Fila ` + n + `, Columna ` + m);
  }else{
    alert(`Campo incorrecto, porfavor compruebe numero (1-6)`);
  }
