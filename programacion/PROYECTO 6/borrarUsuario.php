<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  include 'conexion.php';
  ?>
    <form action="listadoBorrar.php" method="post" onsubmit="return validar()">
      Seguro que quieres borrarlo? <input type="submit" name="BORRAR" value="BORRAR">
      <input type="hidden" name="id" value="<?= $_GET["id"]?>">
    </form>
  </body>
</html>