<! DOCTYPE html>
<html >
  <head>
    <meta  charset = " utf-8 " >
    <title > </title >
  </head>
  <body>
    <link  rel = " stylesheet "  href = " css.css " >
    <? php
    $ conector  =  new  mysqli ( " localhost " , " root " , " " , " juegos " );
      if ( $ conector -> connect_errno ) {
        echo  " Fallo al conectar a MySQL: "  .  $ conector -> connect_error ;
      } else {
        $ nombre = $ _POST [ ' nombre ' ];
        $ apellidos = $ _POST [ ' apellidos ' ];
        $ edad = $ _POST [ ' edad ' ];
        $ curso = $ _POST [ ' curso ' ];
        $ puntuacion = $ _POST [ ' puntuacion ' ];
        $ consulta = " INSERTAR EN usuarios (nombre, apellidos, edad, curso, puntuacion) valores ( ' $ nombre ' , ' $ apellidos ' , $ edad , $ curso , $ puntuacion ) " ;
      $ insertacion  =  $ conector -> consulta ( $ consulta );
     $ resultado  =  $ conector -> consulta ( " SELECT  *  FROM usuarios " );
     foreach ( $ resultado  as  $ fila ) {
        echo  " <strong> Usuario </ strong> " . $ fila [ ' id ' ] . " <br> " . " <strong> Nombre: </ strong> " . $ fila [ ' nombre ' ] . " <br> " . " <strong> Apellidos: </ strong> " . $ fila [ ' apellidos ' ] . " <br> " . "[ ' edad ' ] . " <br> " . " <strong> Curso: </ strong> " . $ fila [ ' curso ' ] . " <br> " . " <strong> Puntuacion: </ strong> " . $ fila [ ' puntuacion ' ] . " <br> <br> " ;
      }
    }
     ? >
  </ body >
</ html >
