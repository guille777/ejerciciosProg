<?php 
include "claseben.php";

$totalVentas2=0;
$totalGastos2=0;
$beneficios2=0;

$ben2=new Beneficios();

$resultado=$ben2->ventaDos();
$resultado2=$ben2->gastoDos();

while ($fila= $resultado->fetch_assoc()){
  	$totalVentas2+=$fila["venta"];
	}
while ($fila= $resultado2->fetch_assoc()){
  	$totalGastos2+=$fila["gasto"];
	}
	$beneficios2=$totalVentas2-$totalGastos2;


//	$consulta2="SELECT venta FROM ventas WHERE num_semana=2";
//	$consulta3="SELECT gasto FROM gastos WHERE num_semana=2";

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Imprimir</title>
 </head>
 <body>
 	<?php 
 	echo "<b>Ventas semana 2: </b>".$totalVentas2;
 	echo "<br>";
 	echo "<b>Gastos semana 2: </b>".$totalGastos2;
 	echo "<hr>";
 	echo "<b>Beneficios semana 2 son: </b>".$beneficios2;


 	 ?>
 </body>
 </html>