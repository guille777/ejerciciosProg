<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	$nba=new equipo();
	$tabla=$nba->devolverEquipos();
	   foreach ($tabla as $key => $fila) {
	    echo "<tr>";                                  
	        echo "<td>".$fila["Nombre"]."</td>";
	        echo "<td>".$fila["Ciudad"]."</td>";
	        echo "<td>".$fila["Conferencia"]."</td>";
	        echo "<td>".$fila["Division"]."</td>";
	        echo "<td>"."<a href='borrar.php?Nombre=".$fila['Nombre']."&Ciudad=".$fila['Ciudad']."&Conferencia=".$fila['Conferencia']."&Division=".$fila['Division']."'>BORRAR</a>"."</td>";
	    echo "</tr>";   
	    }
	    echo "</table>";
?>
</body>
</html>