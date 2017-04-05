<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Clase hija Update</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Conferencia</th>
        <th>Division</th>
        <th>Borrar</th>
    </tr>
<?php 
include "lib/equipos.php";
    $nba= new equipo();
	   if (!empty($_POST['nombre']) && !empty($_POST['ciudad']) && !empty($_POST['conferencia']) && !empty($_POST['division'])){
            $nba->aztualizarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
            //Devolver el equipo insertado ampliar por id...-->  select+insert+update+delete
                $tabla=$nba->devolverUltimoEquipo($_POST['nombre']);
                foreach ($tabla as $key => $fila) {
                    echo "<tr>";
                    echo "<td>".$fila["Nombre"]."</td>";
                    echo "<td>".$fila["Ciudad"]."</td>";
                    echo "<td>".$fila["Conferencia"]."</td>";
                    echo "<td>".$fila["Division"]."</td>";
                    echo "</tr>";
                    }
                echo "</table>";

                echo "<a href='actualizar.php?Nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"]."'>Actualizar Registro</a>";
                echo "<br>";
                echo "<a href='borrar.php?Nombre=".$fila["Nombre"]."'>Borrar Registro</a>";

        }
        //se puede ampliar a todas las casualidades pero se puede hacer desde el frontal
        else {
                echo "<a href="."index.php".">Vuelve a Index</a>";
        }
       
        
        
 ?>

 </body>
</html>