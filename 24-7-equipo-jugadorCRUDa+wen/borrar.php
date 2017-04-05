<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Equipo borrado :</h1>
<?php 
include "lib/equipos.php";
	$nba= new equipo();
	$nombre=$_GET['Nombre'];
		if (isset($_GET["Nombre"])) {
			$borrar=$nba->borrarEquipo($_GET["Nombre"]);
			}
			echo $nombre."<br>";

echo "<a href="."index.php".">volver</a><br>";	
echo "<a href='listaequipos.php'>Borrar mas Equipos</a>";
?>
</body>
</html>
