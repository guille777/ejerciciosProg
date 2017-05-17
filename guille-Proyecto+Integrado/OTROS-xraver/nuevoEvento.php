<?php
  include "lib/eventos.php";
  $evento= new eventos();
  $directorioImagen = 'img/';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/test.css">
  </head>
  <body>

      <nav>
        <ul>
          <li><a class="active" href="inder.php">Inicio</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#about">About</a></li>
          <!-- <li><select><option>equipos</option></select></li> -->
        </ul>
      </nav>

<section class="contenido">
  <!--equired,placeholder...  name  $_POST || $_GET      redireccionar todo a index.php s puede-->
  <?php
    if (isset($_POST) && !empty($_POST) && count($_POST) == 5) {
          include_once("inserview.php");

    }else{
        include_once("prueba1.php");
    }
  ?>
</section>
</body>
</html>