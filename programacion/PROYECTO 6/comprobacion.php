<?php
function comprobar() {
  var valor=document.getElementById('nombre').value;
  var valor2=document.getElementById('edad').value;
  var valor3=document.getElementById('apellidos').value;
  var valor4=document.getElementById('curso').value;
  var valor5=document.getElementById('puntuacion').value;
  if (valor == "") {
    alert("El campo nombre esta vacio");
    return false;
  } else if (valor2 == "") {
    alert("El campo edad esta vacio");
    return false;
  } else if (valor3 == "") {
    alert("El campo apellidos esta vacio");
    return false;
  } else if (valor4 == "") {
    alert("El campo curso esta vacio");
    return false;
  } else if (valor5 == "") {
    alert("El campo puntuacion esta vacio");
    return false;
  } else {
    return true;
  }
}
?>