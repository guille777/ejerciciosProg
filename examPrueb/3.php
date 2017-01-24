<?php 
/**
* 
*/
class Gimnasio1{

private $hombres=[];
private $mujeres=[];
//funciones
	public function almacenarDato($dato){
		if ($dato>0) {
			array_push($this->hombres, $dato);
			//$this->socios[]=$dato;
		}
	}
		public function imprimirDato(){
		foreach ($this->hombres as $key => $value){
			echo $value."<br>";
		}
	}
		public function almacenarDato($dato){
		if ($dato>0) {
			array_push($this->mujeres, $dato);
			//$this->socios[]=$dato;
		}
	}
		public function imprimirDato(){
		foreach ($this->mujeres as $key => $value){
			echo $value."<br>";
		}
	}
	public function media(){
    $media=0;
    foreach ($this->hombres as $key => $value) {
      $media=$media+$value;

    }
    $mediatotal=$media/count($this->hombres);
    return $mediatotal;
  }
	/*
	public function calcularMedia(){
		$mediaH=0;
		$mediaM=0;
		$contadorMedia=0;
		$total=0;
		foreach ($this->hombres as $key => $value){
			$mediaH=$mediaH+$value;
			$contadorMedia++;
		}
		foreach ($this->mujeres as $key => $value){
			$mediaM=$mediaM+$value;
			$contadorMedia++;
		}
		$total=$mediaH+$mediaM;
		$media=$total/count($this->hombres);
		return $media;
	}*/






}
?>