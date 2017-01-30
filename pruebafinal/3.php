<?php 
/**
* 
*/
class Gimnasio{

	private $hom=[];
	private $muj=[];
	//funciones  hombre           h   y   m       
	public function almacenarDato($dato){
		if ($dato>0) {
			array_push($this->hom, $dato);
			//$this->hom[]=$dato;
		}
	}
	public function imprimirDato(){
		foreach ($this->hom as $key => $value){
			echo $value."<br>";
		}
	}
	public function mediaHom1(){
		$media=0;
		foreach ($this->hom as $key => $value) {
			$media=$media+$value;
	}
	$total=$media/count($this->hom);
	return $total;
	}	
	//funciones mujer
	public function subirDato($dato){
		if ($dato>0) {
			array_push($this->muj, $dato);
			//$this->socios[]=$dato;
		}
	}
		public function subidoDato(){
		foreach ($this->muj as $key => $value){
			echo $value."<br>";
		}
	}
	public function mediaMuj(){
		$media1=0;
		foreach ($this->muj as $key => $value) {
			$media1=$media1+$value;
	}
	$total2=$media1/count($this->muj);
	return $total2;
	}	
	//Funcion para sacar la media... que tipo??              hacer con count...
	public function mediaHom(){
		$mediah=0;
		foreach ($this->hom as $key => $value) {
			$mediah=$mediah+$value;
		}
		$mediam=0;
		foreach ($this->muj as $key => $value) {
			$mediam=$mediam+$value;
		}
		$total2=$mediah+$mediam;
		return $total2;
	}
	/*
	public function mediaHom(){
		return array_sum($this->hom)/count($this->hom);
	}
	public function mediaMuj(){
		return array_sum($this->muj)/count($this->muj);
	}*/
	/*
	public function media(){
    $media=0;
    foreach ($this->hombres as $key => $value) {
      $media=$media+$value;

    }
    $mediatotal=$media/count($this->hombres);
    return $mediatotal;
  }*/
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