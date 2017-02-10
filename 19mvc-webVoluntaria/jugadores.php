<!DOCTYPE html>
<html>
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
	</tr>
<?php 
include "conexion.php";

	$jugador= new EquiposFutbol();

	$resultado=$jugador->resumenPlayers();

	while ($fila= $resultado->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$fila["id"]."</td>";
		echo "<td>".$fila["nombre"]."</td>";
		echo "<td>".$fila["apellidos"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>