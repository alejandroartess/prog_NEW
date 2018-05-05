<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:#EEE8AA;">
    <?php
    include '../modelo/conexion.php';
    include '../modelo/crud_database.php';
    include '../modelo/user.php';
        
        //Podemos pasar como parametros del objeto User los valores del POST, asi que podemos eliminar las variables que teniamos antes y
        //dejamos el codigo mas limpio.
        $user = new User($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['curso'],$_POST['puntuacion']);
        $crudDB_object= new crud_database($conector);
        $resultado=$crudDB_object->insertUser($user);

     foreach ($resultado as $fila) {
        echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";
        echo "<a href='todo.php?id=".$fila['id']."'> Listado Usuarios</a> <br>";
        echo "<a href='actualizarUsuario.php?id=".$fila['id']."'> Actualizar</a> <br>";
        echo "<a href='borrarUsuario.php?id=".$fila['id']."'> Borrar</a> <br> <br>";
      }
     ?>
  </body>
</html>