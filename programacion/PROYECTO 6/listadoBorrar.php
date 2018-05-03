<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $conector = new mysqli("localhost", "root", "", "juegos");
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      } else {
        $id=$_POST['id'];
        $consultadelete="DELETE from usuarios where id=$id";
        $delete = $conector->query($consultadelete);
        $resultado = $conector->query("SELECT * FROM usuarios");
      foreach ($resultado as $fila) {
        echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";        
        echo "<a href='todo.php?id=".$fila['id']."'> Listado Usuarios</a> <br>";
        echo "<a href='actualizarUsuario.php?id=".$fila['id']."'> Actualizar</a> <br>";
        echo "<a href='borrarUsuario.php?id=".$fila['id']."'> Borrar</a> <br>";
        echo "<a href='insertarUsuario.php?id=".$fila['id']."'> Insertar</a> <br> <br>";

      }
    }
     ?>
  </body>
</html>