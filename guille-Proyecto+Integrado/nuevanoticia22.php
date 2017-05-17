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
        if (!empty($_POST["titulo"]) && !empty($_POST["subtitulo"]) && !empty($_POST["descripcion"]) && !empty($_POST["categoria"]) && !empty($_POST["imagen"])) {

          $fecha= date("Y-m-d");
          $directorioImagen = 'img/';
          $rutaCompletaImagen = $directorioImagen.$_POST['imagen'];

           $insercion=$evento->insertarEvento($_POST["titulo"],$_POST["subtitulo"],$_POST["descripcion"],$_POST["categoria"],$fecha,$rutaCompletaImagen);
                if (!$insercion) {
                echo "Ha fallado la insercion";
                //recuperar de la bbdd   
                  }else{
                  echo "<img src='".$rutaCompletaImagen."'>"."<br>";
                  echo "<b>Fecha: </b>".$fecha."<br>";
                  $tabla=$evento->devolverEventosInsert($_POST["titulo"]);
                  foreach ($tabla as $key => $value) {
                    echo $value["titulo"]."<br>";
                    echo $value["subtitulo"]."<br>";
                    echo $value["descripcion"]."<br>";
                    echo $value["categoria"]."<br>";
                  }
                  echo "<a href=index.php>Ves a inicio</a>";

                  echo "<a href='actualizarEvento.php?titulo=".$value["titulo"]."&subtitulo=".$value["subtitulo"]."&descripcion=".$value["descripcion"]."&categoria=".$value["categoria"]." '>Actualizar Articulo</a><br>";

                  echo "<a href='borrarArticulo.php?titulo=".$value["titulo"]."'>Borrar Articulo</a><br>";
                  }             
        }else{
          header('Location: index.php');
        }
        
    }
}
if (empty($_POST)) {

?>
<section>
    <article class="parte2">
      <form class="" action="nuevanoticia22.php" method="post">
        <h1>INSERTA UN ARTICULO</h1>
        <input type="text" name="titulo" value="" placeholder="Introduce un titulo" required><br>
        <input type="text" name="subtitulo" value="" placeholder="Introduce una subtitulo" required><br>
        <textarea name="descripcion">
          

        </textarea><br>
        <input type="text" name="categoria" value="" placeholder="Introduce una categoria" required><br>
        <input type="file" name="imagen" value="Elije archivo" placeholder="Introduce una imagen" required><br>
        <input type="hidden" name="accion" value="insertar">
        <input type="submit" name="" value="insertar">
        <a href="index.php">Volver</a>
      </form>
      
    </article>
  </section>
 <?php } ?>
</body>
</html>























  
	

