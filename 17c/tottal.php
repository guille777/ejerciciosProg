<?php 
include "claseben.php";
$totalVentas1=0;
$totalVentas2=0;
$totalGastos1=0;
$totalGastos2=0;

$total= new Beneficios();

$resultado=$total->totalUno();

$resultado2=$total->totalDos();


while ($fila= $resultado->fetch_assoc()){
  		if ($fila["num_semana"]==1) {
  		$totalVentas1+=$fila["venta"];
  		}
  		elseif ($fila["num_semana"]==2) {
  			$totalVentas2+=$fila["venta"];
  			}
  			}
while ($fila= $resultado2->fetch_assoc()){
  		if ($fila["num_semana"]==1) {
  			$totalGastos1+=$fila["gasto"];
  			}
  		elseif ($fila["num_semana"]==2) {
  			$totalGastos2+=$fila["gasto"];
  			}
  			}

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>imprimir</title>
 </head>
 <body>
 	<?php
 	echo "<b>Ventas semana 1:</b> ".$totalVentas1;
 	echo "<br>";
 	echo "<b>Ventas semana 2:</b> ".$totalVentas2;
 	echo "<hr>";
 	echo "<b>Gastos semana 1:</b> ".$totalGastos1;
 	echo "<br>";
 	echo "<b>Gastos semana 1:</b> ".$totalGastos2;

 	 ?>
 	
 </body>
 </html>