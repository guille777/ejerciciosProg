<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border =1>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Ciudad</th>
	</tr>
<?php 
include "conexion.php";

	$equipo= new EquiposFutbol();
	
	$resultado=$equipo->resumenEquipos();

	while ($fila= $resultado->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$fila["id"]."</td>";
		echo "<td>".$fila["nombre"]."</td>";
		echo "<td>".$fila["ciudad"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>