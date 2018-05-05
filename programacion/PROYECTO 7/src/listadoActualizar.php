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
        //lo mismo que el insertar, si quitamos las variables que nos creamos para recoger los parametros,
        //le podemos pasar al constructor del objeto los valores que sacamos directamente del POST.

        $gestor= new crud_database($conector);
        $user= new User($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['curso'],$_POST['puntuacion']);
        $user->setId($_POST['id']);//si recuerdas, en la clase User, cuando definimos el constructor le pasamos todos los parametros menos el Id,asi que cuando 
        //necesitemos pasarle el id, tenemos el metodo setId .
        //si lo ves mas claro puedes cambiar el constructor y pasarle simpre el Id.Por ejemplo en el insert que todavia no lo tienes le puedes pasar 0.
        //si no te queda claro te lo explico el proximo dia
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