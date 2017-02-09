<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div.color{
		background-color: #F0E68C;
		border: solid;
		}
	</style>
</head>
<body>
<div class="color">
	<?php 
	include "thronesDB.php";
		$jTronos= new JuegoTronos();
			$resultado=$jTronos->resumenTitles();
			$resultado2=$jTronos->getEpisodios();
	?>
<ul>
	<li><a href="actores.php">Actores cast</a></li>
	<!--li><a href="actoresTemp.php">Actores season_ep</a></li-->
</ul>
	<form action="actoresTemp.php" method="POST">
		<label for="episodios">Selecciona un episodio:</label>
		<select name="episodios" id="episodios">
			<?php
			while ($fila= $resultado2->fetch_assoc()){
				echo "<option value=".$fila["episode"].">".$fila["episode"]."</option>";
			}
			?>
		</select>
		<input type="submit" value="enviar">
	</form>
<br>
<table border="1">
	<tr>
    	<th>id</th>
    	<th>Titulo</th>
    	<th>Plot</th>
    	<th>Creators</th>
    	<th>season_start</th>
    	<th>season_end</th>
    	<th>seasons</th>
    	<th>generes</th>
  	</tr>
<?php
	while($fila=$resultado->fetch_assoc()){
		//con array asociativo accedemos a la bbdd por campos key value
		echo "<tr>";
		echo "<td>".$fila["id"]."</td>";
		echo "<td>".$fila["title"]."</td>";
		echo "<td>".$fila["plot"]."</td>";
		echo "<td>".$fila["creators"]."</td>";
		echo "<td>".$fila["season_start"]."</td>";
		echo "<td>".$fila["season_end"]."</td>";
		echo "<td>".$fila["seasons"]."</td>";
		echo "<td>".$fila["generes"]."</td>";
		echo "</tr>";
		}
		echo "</table>";
?>
</div>
</body>
</html>
