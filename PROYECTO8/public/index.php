<?php
  //include '../models/conexion.php';

  use modelo\crud_database as crud_database;
  include '../src/models/crud_database.php';
  
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="formulario.css">
    <title></title>
  </head>
  <body style="background-color:#EEE8AA;">
  <h1><font color="black">LISTADO USUARIOS</font></h1>
    <a href="../src/views/insertarUsuario.php">INSERTAR USUARIO</a>
    <?php
    $gestor= new crud_database();
    $resultado = $gestor->getAllUsers();
     foreach ($resultado as $fila) {
        echo "</br>";
        echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";
        echo "<a href='../src/views/actualizarUsuario.php?id=".$fila['id']."'> Actualizar</a> <br>";
        echo "<a href='../src/views/borrarUsuario.php?id=".$fila['id']."'> Borrar</a> <br> <br>";
      }
     ?>
  </body>
</html>