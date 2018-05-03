<?php
$conector=new mysqli ("localhost","root","","juegos");
if ($conector->connect_errno){
    echo "Fallo al conectar a Mysql: ".$conector->connect_errno;
}
    ?>