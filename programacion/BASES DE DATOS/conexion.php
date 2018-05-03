<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Conexion a jugadores</title>
</head>
<body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "pruebabd");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else {
        //No ha habido error
        echo "Conexion realizada<br>";
        //Hacemos una consulta
        $resultado = $mysqli->query("SELECT * FROM jugadores");
        //Cuantas filas nos devuelve
        echo "El numero de jugadores es: " .$resultado->num_rows."<br>";
        for($i=0;$i<$resultado->num_rows;$i++){
            $fila=$resultado->fetch_assoc();
            echo "El jugador ".$fila['id']." se llama:".$fila['nombre']."<br>";
            }
    }
    ?>
</body>
</html>