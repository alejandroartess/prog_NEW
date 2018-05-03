<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura paises</title>
  </head>
  <body>

    <?php
  $conector = new mysqli("localhost", "root", "", "world");
  if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
  }else{
    //Interaccion con la base de datos


   ?>
   <h1>Paises del mundo</h1>
   <?php

    }
    ?>
  </body>
</html>
