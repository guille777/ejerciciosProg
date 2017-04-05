<?php 
include "lib/jugador.php";
$jugador= new jugador();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
</head>
<body>
	<?php 
    var_dump($_POST);
	if (!empty($_POST['codigo']) && !empty($_POST['nombre']) && !empty($_POST['altura']) && !empty($_POST['posicion']) && !empty($_POST['Nombre_equipo'])) {
		
		$jugador->actualizarJugador($_POST["codigo"],$_POST["nombre"],$_POST["procedencia"],$_POST["altura"],$_POST["peso"],$_POST["posicion"],$_POST["Nombre_equipo"]);

        		$tabla=$jugador->devolverUltimoJugador($_POST['codigo']);
                        foreach ($tabla as $key => $fila) {
                            echo "codigo : ".$fila["codigo"]."<br>";
                            echo "nombre : ".$fila["Nombre"]."<br>";
                            echo "procedencia : ".$fila["Procedencia"]."<br>";
                            echo "altura : ".$fila["Altura"]."<br>";
                            echo "peso : ".$fila["Peso"]."<br>";
                            echo "posicion : ".$fila["Posicion"]."<br>";
                            echo "Nombre_equipo : ".$fila["Nombre_equipo"]."<br>";

                        }
      echo "<a href='actualizarJugador.php?codigo=".$fila["codigo"]."&Nombre=".$fila["Nombre"]."&Procedencia=".$fila["Procedencia"]."&Altura=".$fila["Altura"]."&Peso=".$fila["Peso"]."&Posicion=".$fila["Posicion"]."&Nombre_equipo=".$fila["Nombre_equipo"]."'>Actualizar Registro</a><br>";
      
      echo "<a href='borrarJugador.php?codigo=".$fila["codigo"]."'>Borrar Registro</a><br>";
      echo "<a href="."index.php".">VOLVER</a>";

    }
    else{
        echo "<a href="."index.php".">rellena todos los campos</a><br>";
    }
?>
	
</body>
</html>