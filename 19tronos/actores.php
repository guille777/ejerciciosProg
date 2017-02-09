<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actores</title>
</head>
<body>
<p><b>Listado de nombres a partir de la tabla cast:</b></p>
	<?php
	include "thronesDB.php";
		//con include genero el objeto,
		$trono= new JuegoTronos();
		$resultado=$trono->nameActores();
		//igualo el objeto a $resultado...
		//ABRIMOS ESPACIOS DE PHP PARA INSERTAR TABLA EN ESPACIO HTML, Y CONECTAR CON ECHO A TODO....
	?>
<table border="1">
<tr>
	<th>Name</th>
</tr>
	<?php
	// $fila es array asociativo...
	while ($fila= $resultado->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$fila["name"]."</td>";
		echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>