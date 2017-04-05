<?php 
include "lib/jugador.php";
	$jugador= new jugador();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Borrar jugador</title>
</head>
<body>
<h1>Jugador borrado :</h1>
<?php 
	if (isset($_GET["codigo"])) {
		$codigo=$_GET["codigo"];
		if ($jugador->borrarJugador($codigo)) {
			echo "borrado";
		}else{
			echo "hola";
		}
	}
	echo $codigo."<br>";

				
echo "<a href="."index.php".">volver</a><br>";	
echo "<a href='listaJugadores.php'>Borrar mas Jugadores</a>";
?>
</body>
</html>