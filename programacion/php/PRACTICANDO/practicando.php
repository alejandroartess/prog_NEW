<?php
//Ejemplo con while
$i="0";
$a="0";
$b="0";
while ($i <= 10) {
    echo "$i";

    $i=$i+2;
}
//Esto es un salto de linea
echo "<br>"; 

//Ejemplo con do-while
do {
    echo "$a";
    $a=$a+2;
} while ($a <= 10);

//Esto es un salto de linea
echo "<br>"; 

//Ejemplo con for
for ($b=0; $b <= 10; $b=$b+2) { 
    echo "$b";
}

//Ejemplo array
$array = array('Hola' => "2" );
var_dump($array["Hola"]);

$array2 = array('1' => "Alejandro es el mejor");
foreach ($array2 as $frasearray) {
    echo $frasearray;
}

//Esto es un salto de linea
echo "<br>"; 

//Ejemplo imprimir por pantalla los colores primarios
$colores = array('Rojo ','Amarillo ','Azul ','Verde ');
foreach ($colores as $coloresprimarios) {
    echo $coloresprimarios;
}
?>

