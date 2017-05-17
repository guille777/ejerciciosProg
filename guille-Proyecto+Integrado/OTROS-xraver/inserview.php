<?php
          $fecha= date("Y-m-d");
          $rutaCompletaImagen = $directorioImagen.$_POST['imagen'];
          $insercion=$evento->insertarEvento($_POST["titulo"],$_POST["subtitulo"],$_POST["descripcion"],$_POST["categoria"],$fecha,$rutaCompletaImagen);
          if (!$insercion) {
            echo "Ha fallado la insercion";
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
          }


?>