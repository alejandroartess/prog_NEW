<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuario</title>
    <link rel="stylesheet" href="formulario.css">
  </head>
  <body style="background-color:#EEE8AA;">
  <h1><font color="black">BORRAR USUARIO</font></h1>
    <form action="listadoBorrar.php" method="post" onsubmit="return validar()">
      Seguro que quieres borrarlo? <input type="submit" name="BORRAR" id="boton" value="BORRAR">
      <input type="hidden" name="id" value="<?= $_GET["id"]?>">
    </form>
  </body>
</html>
