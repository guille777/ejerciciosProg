

<?php 
/**
* Programa de dados, creamos class:
*/
class jugadorDado
{

//atributos o propiedades privado, interno.     acceder de manera diferente a estas variables:       desde la misma clase
	private $minNumDado;
	private $maxNumDado;
	private $tiradas=[];
//funcion get:
	public function getMinNumDado(){
		return $this->minNumDado;
	}
	public function getMaxNumDado(){
		return $this->maxNumDado;
	}

// funcion set, estructuras para limitar minimo y maximo de los numeros:     Aparece ||=or     OR das VAREMO:      con el set damos valor a la variable $minNumDado,$maxNumDado¿?

	public function setMinNumDado($minNumDado){
		if ($minNumDado<0 || $minNumDado<12 ) {
			$this->minNumDado=0;
		}
		else {
			$this->minNumDado=$minNumDado;
		}
	}
	public function setMaxNumDado($maxNumDado){
		if ($maxNumDado>12 || $maxNumDado<0) {
			$this->maxNumDado=12;
		}
		else{
			$this->maxNumDado=$maxNumDado;
		}
	}
//creamos la funcion nueva con rand,      DEVUELVE== RETURN.....       metemos la funcion creada para ca vez que se utilice:             
	public function tirarDado(){

		$dado = rand($this->minNumDado,$this->maxNumDado);
		$this->guardarTirada($dado);
		return $dado;
	}

	private function guardarTirada($dado){
		array_push($this->tiradas, $dado);
	}

//en la funcion, con for doy valor con sizeof($this->tiradas)     para recorrer sizeof-> tamaño de array..           ..........ver con count...................
	public function imprimirTiradas(){
		for ($i=0; $i<sizeof($this->tiradas) ; $i++) { 
			echo $this->tiradas[$i];
		}
		
	}

	public function calcularMediaTiradas(){
		$suma=0;
		$media=0;
		for ($i=0; $i<sizeof($this->tiradas) ; $i++) { 
			$suma=$suma+$this->tiradas[$i];
		}
		$media= $suma/sizeof($this->tiradas);
		$mediaredondeada = round($media);
		return $mediaredondeada;
	}

}
?>

























