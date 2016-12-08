<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fichero que incluye jugadorDado</title>
</head>
<body>

<?php 

include "jugadorDado.php";

$tiradas= new jugadorDado();

//bucle para sacar las primeras tiradas, y a cada una se le concatena la funcion tirarDado con rand.
for ($i=0; $i <=12 ; $i++) { 

	echo "Tirada ".$i." = ";
	echo $tiradas->tirarDado()."<br>";
}	


//viendo el contenido nuevo de ámbitos..., con atributos privados, y funciones dentro de los include, etc... 
echo "-------------------------<br>";

echo $tiradas->tirarDado();

?>
</body>
</html>

