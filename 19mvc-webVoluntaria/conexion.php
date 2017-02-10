<?php
/**
 *
 */
class EquiposFutbol{

  private $conexion;
  private $errorConexion=false;

  function __construct(){
    $this->conexion = new mysqli("localhost", "root", "", "equiposfutbol");
    if ($this->conexion->connect_errno) {
      $this->errorConexion=true;
    }
  }

  public function getErrorConexion(){
    return $this->errorConexion;
  }

  public function resumenPlayers(){
    return $this->conexion->query("SELECT * from jugadores");
  }
  public function resumenEquipos(){
    return $this->conexion->query("SELECT * from equipos");
  }
    public function resumenArbitros(){
    return $this->conexion->query("SELECT * from arbitros");
  }
  
}
 ?>