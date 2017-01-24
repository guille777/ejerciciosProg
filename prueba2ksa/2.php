<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>numero socios semanales</title>
</head>
<body>
<?php
//sin include
$lunes=$_POST["lunesh"];
echo "<b>Lunes sin include :</b>". " ".$lunes;
echo "<hr>";
?>

<?php
//1-generamos objeto y cojemos los datos del array; el value,2-$_POST con foreach usando funciones;
	include "3.php";
		$nuevo= new Gimnasio();

		$nuevo->almacenarDato($_POST["lunesh"]);
		echo $nuevo->imprimirDato();
		echo "<hr>";
		$nuevo->subirDato($_POST["lunesm"]);
		echo $nuevo->subidoDato();
		echo "<hr>";

		foreach ($_POST as $key => $value) {
	 		$nuevo->almacenarDato($value);
			}
			echo $nuevo->imprimirDato();
			echo "<hr>";
			echo "la media de la semana es : ".$nuevo->mediaHom();
?>
<?php
/*include "3.php";
$gestor2= new Gimnasio();
$gestor2->almacenarDato($_POST["lunesh"]);
echo $gestor2->imprimirDato();
/*
$gestor->almacenarDato($_POST["martes"]);
echo "<br>";
$gestor->almacenarDato($_POST["miercoles"]);
echo "<br>";
$gestor->almacenarDato($_POST["jueves"]);
echo "<br>";1
$gestor->almacenarDato($_POST["viernes"]);
echo "<br>";
$gestor->almacenarDato($_POST["sabado"]);
echo "<br>";
echo $gestor->imprimirDato();*/
?> 
</body>
</html>