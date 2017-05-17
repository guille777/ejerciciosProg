<?php 
include "./lib/eventos.php";
$evento=new eventos();
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
          <li><a class="active" href="index.php">Inicio</a></li>
          <li><a href="nuevanoticia22.php">ARTICULOS-ELECTRONICOS</a></li>        
          <li><a href="#nuevanoticia.php">LIBROS</a></li>
          <li><a href="#actualizarEvento.php">CLASES PARTICULARES</a></li>
          <li><a href="#actualizarEvento.php">VER ARTICULOS</a></li>
          <button type="button" onclick="location.href='login.php'">ves a login</button>
        </ul>
      </nav>

<section class="contenido">
  <?php 
  $tabla=$evento->devolverEventos();
    foreach ($tabla as $fila) {
      echo "<article>";
      echo "<div>";
        echo "<img src='".$fila['imagen']."'>";
      echo "</div>";
      echo "<div>";
        echo "<b>Titulo: </b>".$fila["titulo"]."<br>";
        echo "<b>Subtitulo: </b>".$fila["subtitulo"]."<br>";
        echo "<b>Descripcion: </b>".$fila["descripcion"]."<br>";
        echo "<b>Categoria: </b>".$fila["categoria"]."<br>";
        echo "<b>Fecha: </b>".$fila["fecha"]."<br>";
      echo "</div>";
      echo "</article>";
    }
  ?>
</section>
</body>
</html>
