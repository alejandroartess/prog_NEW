<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:#EEE8AA;">
  <h1><font color="black">LISTADO USUARIOS</font></h1>
    <?php
    include '../modelo/conexion.php';
    include '../modelo/crud_database.php';
    include '../modelo/User.php';
      
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $edad=$_POST['edad'];
        $curso=$_POST['curso'];
        $puntuacion=$_POST['puntuacion'];

        var $crudDB_object= new crud_database();
        $resultado=$crudDB_object->updateUser($user);
     foreach ($resultado as $fila) {
        echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";
        echo "<a href='todo.php?id=".$fila['id']."'> Listado Usuarios</a> <br>";
        echo "<a href='insertarUsuario.php?id=".$fila['id']."'> Insertar</a> <br>";
        echo "<a href='borrarUsuario.php?id=".$fila['id']."'> Borrar</a> <br>";
    }



   

    $crudDB_object->insertUser($uusarioQueQuieroActualizar);
}
     ?>
  </body>
</html>