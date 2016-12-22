<?php

//1º FORMATEO LOS DATOS COMO ME DA LA GANA, COMO MAS COMODO ME SEA LUEGO TRABAJAR CON ELLOS:

	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$curso=$_POST["Curso"];
	$ciclo=$_POST["Ciclo"];
	//me lo guardo en un array para poder recorrelo luego mejor
	$notas["prog"]=$_POST["PROG"]; //5
	$notas["ed"]=$_POST["ED"]; //6
	$notas["llmm"]=$_POST["LLMM"]; //6
	$notas["bbdd"]=$_POST["BBDD"]; //7

//2º INICIALIZAMOS LAS VARIABLES
	$max=0;
	$min=10;
	$media=0;
	$suma=0;

//3ºPROCESAMOS LOS DATOS
	foreach ($notas as $key => $value) {
		//sacamos el maximo
		if ($value > $max) {
			$max = $value;
		}
		//sacamos el minimo
		if ($value<$min ) {
			$min=$value;
		}

		//sacamos la suma de todos los valores
		$suma=$suma+$value;

	}

	$media=$suma/4;

//4ºMOSTRAMOS LOS DATOS TRANSFORMADOS
	echo "El Alumno es :".$nombre." ".$apellidos."<br>". "De el curso : ".$curso."<br>"." De el ciclo : ".$ciclo."<br>";


	echo "La nota maxima es: ".$max."<br>"; //7

	echo "La nota mas baja es: ".$min."<br>";
	echo "La nota media es: ".$media;
	echo "<br>";

?>
