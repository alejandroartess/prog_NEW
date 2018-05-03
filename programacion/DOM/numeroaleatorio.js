//Funcion para obtener el numero del usuario
function obtenernumero() {
  var numerousuario=document.getElementById("numero").value;
console.log("El numero del usuario es "+ numerousuario);
}

//Numero que el usuario tiene que acertar
var numerocorrecto=4;
console.log(numerocorrecto);

//Comprobar que el numero del usuario es correcto o no
var numerousuario="";
while ((numerousuario>0)&&(numerousuario<=10)) {
if (numerousuario==numerocorrecto) {
  alert("Has acertadoo!!!");
}
if (numerousuario=!numerocorrecto) {
  alert("Has fallado!!");
}
}
