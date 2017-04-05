<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>listado borrar</title>
</head>
<body>
	<table border="1">
    <tr>
        <th>codigo</th>
        <th>Nombre</th>
        <th>Procedencia</th>
        <th>Altura</th>
        <th>Peso</th>
		<th>Posicion</th>
		<th>Nombre_equipo</th>
        <th>Borrar</th>
    </tr>
<?php 
include "lib/jugador.php";
	$jug= new jugador();
	echo "<a href="."index.php".">volver</a><br>";
	$tabla=$jug->devolverJugador();
		foreach ($tabla as $key => $fila) {
		echo "<tr>";  
			echo "<td>".$fila["codigo"]."</td>";
			echo "<td>".$fila["Nombre"]."</td>";
			echo "<td>".$fila["Procedencia"]."</td>";
			echo "<td>".$fila["Altura"]."</td>";
			echo "<td>".$fila["Peso"]."</td>";
			echo "<td>".$fila["Posicion"]."</td>";
			echo "<td>".$fila["Nombre_equipo"]."</td>";
			echo "<td>"."<a href='borrarJugador.php?codigo=".$fila["codigo"]."&Nombre=".$fila["Nombre"]."&Procedencia=".$fila["Procedencia"]."&Altura=".$fila["Altura"]."&Peso=".$fila["Peso"]."&Posicion=".$fila["Posicion"]."&Nombre_equipo=".$fila["Nombre_equipo"]."'>Borrar Registro</a>"."</td>";
		echo "</tr>"; 
		}
		echo "</table>";
?>
</body>
</html>







