<?php 
//Array dinamico con claves y valor:
$tablas=[
"primera"=>5,
"segunda"=>11,
"tercera"=>13
];

//foreach define array "clave" y valor: prepara el bucle
foreach ($tablas as $key => $value) {
//estructura de repeticion o bucle for:    en for intr $multiplicar= echo operacion
	for ($i=1; $i<11 ; $i++) { 
		$multiplicar=$i*$value;
		echo "<b> $value x $i=$multiplicar</b> <br>";
	}
	echo "<br>";
}
?>