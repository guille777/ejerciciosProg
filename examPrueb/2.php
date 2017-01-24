<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>numero socios semanales</title>
</head>
<body>
<?php
//sin include
$lunes=$_POST["lunes"];
echo "Este es Lunes: ".$lunes;
echo "<hr>";
?>

<?php
include "3.php";
$nuevo= new Gimnasio1();

foreach ($_POST as $key => $value) {
	 $gestor->almacenarDato($value);
}
echo $gestor->imprimirDato();
echo "<hr>";
/*
$gestor->almacenarDato($_POST["martes"]);
echo "<br>";
$gestor->almacenarDato($_POST["miercoles"]);
echo "<br>";
$gestor->almacenarDato($_POST["jueves"]);
echo "<br>";
$gestor->almacenarDato($_POST["viernes"]);
echo "<br>";
$gestor->almacenarDato($_POST["sabado"]);
echo "<br>";
echo $gestor->imprimirDato();*/
	
?> 
</body>
</html>