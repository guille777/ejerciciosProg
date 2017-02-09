<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Imprimimos el formuario con select=$_POST</title>
</head>
<body>
	<?php 
		include "thronesDB.php";
		//Hacemos new object, y guardamos en $resultado llamando a funcion y PASAMOS PARAMETROS $_POST["episodios"],
		$season= new JuegoTronos();
		$resultado=$season->nameActoresEpisodio($_POST["episodios"]);
 	?>
<table border="1">
<tr>
	<th>Name</th>
	<th>Episode</th>
</tr>
<p><b>Informacion sobre la tabla season_ep:</b></p>
	<?php 
	while ($fila= $resultado->fetch_assoc()){
		echo "<tr>";
			echo "<td>".$fila["name"]."</td>";
			echo "<td>".$fila["episode"]."</td>";
		echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>













