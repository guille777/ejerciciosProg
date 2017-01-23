<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fichero que incluye jugadorDado</title>
</head>
<body>
<?php 

echo "<h2>Tiradas:</h2>";

include "jugadorDado.php";

$tiradas= new jugadorDado();
//recojes en formulario 
$max=$_POST["maximo"];
$min=$_POST["minimo"];

//desde el archivo 
$tiradas->setminNumDado($min);
$tiradas->setMaxNumDado($max);

//bucle para sacar las primeras tiradas, y a cada una se le concatena la funcion tirarDado con rand.
for ($i=0; $i <=12 ; $i++) { 
echo "Tirada ".$i." = ";
echo $tiradas->tirarDado()."<br>";
}	

echo "-----------------------";
echo "<br>";
echo "la media es : ".$tiradas->calcularMediaTiradas();
?>
</body>
</html>

