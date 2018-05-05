<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Insertar Usuarios</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body style="background-color:#EEE8AA;">
<h1><font color="black">INSERTAR USUARIO</font></h1>
<!-- aqui importabas el conexion.php    . Te lo he quitado porque asi no sirve para nada-->
<script src="validar.js" charset="utf-8"></script>
    <form action="listadoInsertar.php" method="post" onsubmit="return validar();">
      <input type="text" id="nombre" name="nombre" placeholder="Nombre">
      <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
      <input type="text" id="edad" name="edad" placeholder="Edad">
      <input type="text" id="curso" name="curso" placeholder="Curso">
      <input type="text" id="puntuacion" name="puntuacion" placeholder="Puntuacion">
      <input type="submit" name="Enviar" id="boton" value="Enviar">
</body>
</html>