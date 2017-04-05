<?php 
include "lib/jugador.php";
$jugador= new jugador();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/test.css">
  </head>
  <body>
  <!--required,placeholder...  name  $_POST || $_GET redireccionar todo a index.php s puede-->
    <div id="formularios">
       <?php 
        include_once("formEquipo.php");
        include_once("formJugador.php");
       ?>
  </div>
</body>
</html>