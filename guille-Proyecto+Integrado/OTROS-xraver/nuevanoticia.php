<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
  <link rel="stylesheet" href="./css/formulario.css">
  <link rel="stylesheet" href="./css/test.css">
</head>
<body>
	
</body>
</html>
<?php
if(isset($_POST["accion"])){
  include "lib/eventos.php";
  $evento= new eventos();
	if($_POST["accion"]=="insertar"){
        if (!empty($_POST["titulo"]) && !empty($_POST["subtitulo"]) && !empty($_POST["categoria"]) && !empty($_POST["imagen"])) {

          $fecha= date("Y-m-d");
          $directorioImagen = 'img/';
          $rutaCompletaImagen = $directorioImagen.$_POST['imagen'];

           $insercion=$evento->insertarEvento($_POST["titulo"],$_POST["subtitulo"],$_POST["descripcion"],$_POST["categoria"],$fecha,$rutaCompletaImagen);
                if (!$insercion) {
                echo "Ha fallado la insercion";
                //recuperar de la bbdd   
                  }else{
          		    echo "<article>";
                  echo "<div>";
                  echo "<img src='".$rutaCompletaImagen."'>";
                  echo "</div>";
                  echo "<div>";
                	echo  "<b>Titulo: </b>".$_POST["titulo"]."<br>";
                	echo "<b>Subtitulo: </b>".$_POST["subtitulo"]."<br>";
                	echo "<b>Descripcion: </b>".$_POST["descripcion"]."<br>";
                	echo "<b>Categoria: </b>".$_POST["categoria"]."<br>";
                	echo "<b>Fecha: </b>".$fecha."<br>";
                  echo "</div>";
                  echo "</article>";
                  echo "<a href=inder.php>Ves a inicio</a>";
                  }             
        }else{
          header('Location: inder.php');
        }
        
    }
}
if (empty($_POST)) {

?>
<section>
    <article class="parte2">
      <form class="" action="nuevanoticia.php" method="post">
        <h1>INSERTA UN ARTICULO</h1>
        <input type="text" name="titulo" value="" placeholder="Introduce un titulo" required><br>
        <input type="text" name="subtitulo" value="" placeholder="Introduce una subtitulo" required><br>
        <textarea name="descripcion">
          

        </textarea><br>
        <input type="text" name="categoria" value="" placeholder="Introduce una categoria" required><br>
        <input type="file" name="imagen" value="Elije archivo" placeholder="Introduce una imagen" required><br>
        <input type="hidden" name="accion" value="insertar">
        <input type="submit" name="" value="insertar">
        <a href="inder.php">Volver</a>
      </form>
      
    </article>
  </section>
 <?php } ?>
</body>
</html>























  
	

