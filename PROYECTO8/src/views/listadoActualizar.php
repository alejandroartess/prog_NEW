<?php
require_once __DIR__.'/../../vendor/autoload.php';
use florida\models\Crud_database;
use florida\models\User;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:#EEE8AA;">
  <h1><font color="black">LISTADO USUARIOS</font></h1>
    <?php

        $gestor= new Crud_database($conector);
        $user= new User($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['curso'],$_POST['puntuacion']);
        $user->setId($_POST['id']);
        $resultado=$crudDB_object->updateUser($user);
     foreach ($resultado as $fila) {
        echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";
        echo "<a href='todo.php?id=".$fila['id']."'> Listado Usuarios</a> <br>";
        echo "<a href='insertarUsuario.php?id=".$fila['id']."'> Insertar</a> <br>";
        echo "<a href='borrarUsuario.php?id=".$fila['id']."'> Borrar</a> <br>";
    }
}
     ?>
  </body>
</html>
