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
		<th>Apellidos</th>
		<th>colegio</th>
	</tr>
<?php 
include "conexion.php";

	$arbitro= new EquiposFutbol();

	$resultado=$arbitro->resumenArbitros();

	while ($fila= $resultado->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$fila["id"]."</td>";
		echo "<td>".$fila["nombre"]."</td>";
		echo "<td>".$fila["apellidos"]."</td>";
		echo "<td>".$fila["colegio"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>	
</body>
</html>