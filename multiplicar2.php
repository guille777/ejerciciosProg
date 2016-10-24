<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio while</title>
</head>
<body>
<h2>Tabla de multiplicar del 2 :</h2>
<?php 
//damos valor a la variable
$n=1;
//se inicia estructura de repeticion, bucle:
while ($n <= 10) {
	$resultado= $n * 2;
//variable nueva $resultado definida se muestra con echo".......<br>"
	echo "$n x 2 = $resultado <br>";
//aumenta la variable $n
$n++;	
//y vuelve ejecuta y vuelve hasta q se corta
}
?>
</body>
</html>

















