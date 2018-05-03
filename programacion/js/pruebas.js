//Introducir las variables
var x=20;
var y=10;
var resultado="";

//Realizar la operacion
alert("La primera variable es: " + x )
alert("La segunda variable es: " + y )

//Imprimir el resultado
resultado=(x/y);
alert("El resultado de dividir estas dos es: " + resultado);

//Sumarle 1 a una variable
x++;
y++;
alert(x);
alert(y);

//Restarle 1 a una variable
x--;
y--;
alert(x);
alert(y);

if (resultado>10){
    alert("Es mayor que 10");
}else if (resultado==10){
    alert("Es igual a 10");
}else{
alert("Es menor que 10");
}
