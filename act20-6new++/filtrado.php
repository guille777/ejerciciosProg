<?php
include "dbNBA.php";
$nba= new dbNBA();

if (!empty($_POST['equipol'])) {

	$nba->getResultado($_POST["equipol"]);

}elseif (!empty($_POST['equipolocal']) && !empty($_POST['equipov']) && !empty($_POST['temporada'])) {

	$nba->resultadoTriple($_POST["equipolocal"],$_POST["equipov"],$_POST["temporada"]);
}else{
	echo "esta vacio";
}

var_dump($_POST);
print_r($_POST);
?>












 ?>
