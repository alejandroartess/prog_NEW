//If/Else if/Else//While
var numUsuario=0;
var respuestacorrecta=58;
var respuestaUsuario="";
var i=0

for (var i = 0; i <= 3; i++) {do {
  respuestaUsuario=prompt("Introduce un numero del 1 al 100");
  numUsuario=parseInt(respuestaUsuario);
console.log(numUsuario);
} while (numUsuario>=100);

if (numUsuario==respuestacorrecta) {
  alert("HAS ACERTADO!!");

}
else {
  alert("INTENTALO DE NUEVO!!")
}
}
