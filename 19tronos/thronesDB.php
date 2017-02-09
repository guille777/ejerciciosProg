<?php
/**
 *Conexion a BBDD con construct, funciones con query:         ////***    $_POST PARA FORM+select->funcion($episodio)
 */
class JuegoTronos{

  private $conexion;
  private $errorConexion=false;

  public function __construct(){
    $this->conexion = new mysqli("localhost", "root", "", "gameofthrones");
    if ($this->conexion->connect_errno) {
      $this->errorConexion=true;
    }
  } 
  public function getErrorConexion(){
    return $this->errorConexion;
  } 
  public function resumenTitles(){
    return $this->conexion->query("SELECT * from titles");
  } 
  public function nameActores(){
    return $this->conexion->query("SELECT name FROM cast");
  }
  //  *******  FUNCION CREADA PARA QUE RECIBA UN PARAMETRO, PARA ACCEDER CON $_POST
  public function nameActoresEpisodio($episodio){
    return $this->conexion->query("SELECT name,episode FROM season_ep WHERE episode = $episodio");
  }
  //return directo de la funcion, se puede guardar en una variable, y hacer return:
  public function getEpisodios(){
    return $this->conexion->query("SELECT DISTINCT(episode) FROM season_ep");
  }

}
?>