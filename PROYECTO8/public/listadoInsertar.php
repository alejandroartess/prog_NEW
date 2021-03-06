<?php
require_once __DIR__.'/../vendor/autoload.php';
use florida\models\Crud_database;
use florida\models\User;
if(!isset($_POST["nombre"])){
  include_once '../src/views/insertarUsuario.html';
}else{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestion de usuarios</title>
    <link rel="stylesheet"  href="css/formulario.css">
  </head>
  <body>
  <h1>Listado de usuarios</h1>
    <div class="actions"><a href="listadoInsertar.php">Insertar Usuario</a></div>
    <?php
          $user = new User($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['curso'],$_POST['puntuacion']);
          $crudDB_object= new Crud_database();

          $resultado=$crudDB_object->insertUser($user);

         foreach ($resultado as $fila) {
           echo "</br>";
           echo "<div class='card'>";
           echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";
           echo "<a href='listadoActualizar.php?id=".$fila['id']."'>Actualizar</a>";
           echo "<a href='listadoBorrar.php?id=".$fila['id']."'>Borrar</a>";
           echo "</div>";
          }
     ?>
  </body>
</html>
<?php } ?>
