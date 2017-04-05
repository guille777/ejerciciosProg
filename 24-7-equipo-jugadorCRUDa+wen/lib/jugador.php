<?php
include "db.php";
/**
*Seguimos con crud, puede que en esta tabla falten control de errores, añadire-mejorare despues de corrección.
*/
class jugador extends db{
	
	function __construct()
	{
		parent::__construct();
	}	
	//al pasar VALUES: comillas simples porque es un string en DB, y luego comillas dobles...sqlinsercion= variable para almacenar insert, conexion objeto php que ejecuta funcion de mysqli query a database...       conflicto con el campo Nombre_equipo puesto con select=input?name
	public function insertarJugador($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$Nombre_equipo){
	  $sqlInsercion="INSERT INTO jugadores(codigo,Nombre,Procedencia,Altura,Peso,Posicion,Nombre_equipo) Values('".$codigo."','".$nombre."','".$procedencia."','".$altura."','".$peso."','".$posicion."','".$Nombre_equipo."')";
	     $this->conexion->query($sqlInsercion);
	}
	public function actualizarJugador($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$Nombre_equipo){
		$sqlActualizar="UPDATE jugadores SET codigo='".$codigo."',Nombre='".$nombre."',Procedencia='".$procedencia."',Altura='".$altura."',Peso='".$peso."',Posicion='".$posicion."',Nombre_equipo='".$Nombre_equipo."' WHERE codigo='".$codigo."' ";
		$this->conexion->query($sqlActualizar);
	}
	public function borrarJugador($codigo){
	  $deleteSql="DELETE FROM jugadores WHERE codigo='".$codigo."'";
	  	if($this->conexion->query($deleteSql)){
	  		return true;
	  	}else{
	  		return false;
	  	}
	}
	public function devolverUltimoJugador($codigo){
	  $sql="SELECT * FROM jugadores WHERE codigo = '".$codigo."' ";
	    return $resultado=$this->realizarConsulta($sql);
	}
	//alejandro ajenjo style
	public function devolverJugador(){
		$sql="SELECT * FROM jugadores";
		return $resultado=$this->realizarConsulta($sql);
	}


	public function SelectEquipoLocal(){
    	return $this->conexion->query("SELECT distinct(Nombre) FROM equipos  GROUP BY Nombre ASC");
  	}

}
?>