<?php 
include "lib/eventos.php";
  $evento= new eventos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Borrar</title>
	<link rel="stylesheet" href="./css/test.css">
</head>
<body>
<?php
if (isset($_GET["titulo"])) {
	$titulo=$_GET["titulo"];
	if ($evento->borrarEvento($titulo)) {
		echo "articulo borrado"."<br>";
	}else{
		echo "no se ha borrado";
	}
}
echo "<b>Tu articulo borrado : </b>".$titulo."<br>";
echo "<a href="."index.php".">volver</a><br>";
?>
	
</body>
</html>