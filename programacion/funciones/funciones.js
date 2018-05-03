function evaluar(){
  var operacion=prompt("Indtroducir la expresion a evaluar");
  var resultado=eval(operacion);
  alert("El resultado es "+resultado);
}
function evaluarNUm(){
  var algo=prompt("Introducir algo");
  if (isNan(algo)) {
    alert("No has introducido un numero");
  }else {
    alert("Has introducido un numero");
  }
}
function convertirNum(){
  var input=prompt("Introducir un numero");
  var inputParseado=parseInt(input);
  alert("El numero introducido "+input+" se ha convertido a "+inputParseado);
}
