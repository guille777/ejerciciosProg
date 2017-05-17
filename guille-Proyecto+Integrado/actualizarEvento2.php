<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
  <link rel="stylesheet" href="./css/test.css">
</head>
<body>
<?php
if(isset($_POST["accion"])){
  include "lib/eventos.php";
  $evento= new eventos();
  if($_POST["accion"]=="actualizar"){
        if (!empty($_POST["titulo"]) && !empty($_POST["subtitulo"]) && !empty($_POST["descripcion"]) && !empty($_POST["categoria"]) && !empty($_POST["imagen"])) {

          $fecha= date("Y-m-d");
          $directorioImagen = 'img/';
          $rutaCompletaImagen = $directorioImagen.$_POST['imagen'];

          $evento->devolverEventosInsert($_POST["titulo"]);
           $actualizar=$evento->actualizarEvento($_POST["titulo"],$_POST["subtitulo"],$_POST["descripcion"],$_POST["categoria"],$fecha,$rutaCompletaImagen);
                if (!$actualizar) {
                echo "Ha fallado la acualizacion";
                //recuperar de la bbdd   
                  }else{
                  $tabla=$evento->devolverEventosInsert($_POST["titulo"]);
                  foreach ($tabla as $key => $value) {
                    echo $value["titulo"]."<br>";
                    echo $value["subtitulo"]."<br>";
                    echo $value["descripcion"]."<br>";
                    echo $value["categoria"]."<br>";
                    echo "<b>Fecha: </b>".$fecha."<br>";
                    echo "<img src='".$rutaCompletaImagen."'>"."<br>";
                  }
                  echo "<a href=index.php>Ves a inicio</a>"."<br>";
                  echo "<a href='borrarArticulo.php?titulo=".$value["titulo"]."'>Borrar Articulo</a><br>";
                  // echo "<a href='actualizarEvento.php?titulo=".$value["titulo"]."&subtitulo=".$value["subtitulo"]."&descripcion=".$value["descripcion"]."&categoria=".$value["categoria"]." '>Actualizar Registro</a><br>";
                  }             
        }else{
          header('Location: index.php');
        }
        
    }
}
?>
</body>
</html>