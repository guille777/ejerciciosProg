<?php 
include "claseben.php";

$totalVentas1=0;
$totalGastos1=0;
$beneficios1=0;

$ben= new Beneficios();

$resultado=$ben->ventaUno();
$resultado2=$ben->gastoUno();

//tambien sacar el while fetch_assoc a las funciones de la clase...
while ($fila= $resultado->fetch_assoc()){
  	$totalVentas1+=$fila["venta"];
	}
	while ($fila= $resultado2->fetch_assoc()){
  		$totalGastos1+=$fila["gasto"];
	}
		$beneficios1=$totalVentas1-$totalGastos1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Beneficios 1</title>
</head>
<body>
<?php 
	echo "<b>Ventas semana 1: </b>".$totalVentas1."<br>";
	echo "<b>Gastos semana 2: </b>".$totalGastos1."<hr>";
	echo "<b>Los Beneficios son: </b>".$beneficios1;
 ?>
</body>
</html>

