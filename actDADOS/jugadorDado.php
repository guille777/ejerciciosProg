<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejecicio de Dados:</title>
</head>
<body>
<?php 
/**
* Programa de dados, creamos class:
*/
class jugadorDado
{

//atributos o propiedades privado, interno.     acceder de manera diferente a estas variables:       desde la misma clase
	private $minNumDado=0;
	private $maxNumDado=12;

//publica:
	public $tirarDado;
	
//funcion get:
	public function getMinNumDado(){
		return $this->minNumDado;
	}
	public function getMaxNumDado(){
		return $this->maxNumDado;
	}

// funcion set, estructuras para limitar minimo y maximo de los numeros:
	public function setMinNumDado($minNumDado){
		if ($minNumDado<0) {
			$this->minNumDado=0;
		}
		else {
			$this->minNumDado=$minNumDado;
		}
	}
	public function setMaxNumDado($maxNumDado){
		if ($maxNumDado>12) {
			$this->maxNumDado=12;
		}
		else{
			$this->maxNumDado=$maxNumDado;
		}
		}

//creamos la funcion nueva con rand,            aparece echo para mostrar en inlude?¿           
	public function tirarDado(){
	$this->tirarDado=rand(0,12);
	echo $this->tirarDado;
	}

}
?>
</body>
</html>

























