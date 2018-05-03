<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {margin: 0;}

    ul.sidenav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 10%;
        background-color: #f1f1f1;
        position: fixed;
        height: 14%;
        overflow: auto;
    }

    ul.sidenav li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
    }

    ul.sidenav li a.active {
        background-color: #4CAF50;
        color: white;
    }

    ul.sidenav li a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    div.content {
        margin-left: 25%;
        padding: 1px 16px;
        height: 1000px;
    }

    @media screen and (max-width: 900px) {
        ul.sidenav {
            width: 100%;
            height: auto;
            position: relative;
        }
        ul.sidenav li a {
            float: left;
            padding: 15px;
        }
        div.content {margin-left: 0;}
    }

    @media screen and (max-width: 400px) {
        ul.sidenav li a {
            text-align: center;
            float: none;
        }
    }
    </style>
    </head>
    <body>
    <?php $pagina="INICIO" ?>
    <ul class="sidenav">
  <li><a href="./pagina.php">INICIO</a></li>
  <li><a href="./BUSCANOS.php">BUSCANOS</a></li>
  <li><a href="./CONTACTANOS.php">CONTACTANOS</a></li>
</ul>
<br><br><br><br><br>
<h2><?php if ($pagina=="INICIO") {
echo "Estas en " .$pagina;
}?></h1>
  </body>
</html>
