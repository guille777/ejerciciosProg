<?php
/**
 *
 */
class Beneficios{

  private $conexion;
  private $errorConexion=false;

  function __construct(){
    $this->conexion = new mysqli("localhost", "root", "", "beneficios");
    if ($this->conexion->connect_errno) {
      $this->errorConexion=true;
    }
  }

  public function getErrorConexion(){
    return $this->errorConexion;
  }

  public function ventaUno(){
    return $this->conexion->query("SELECT venta FROM ventas WHERE num_semana=1");
  }

  public function gastoUno(){
    return $this->conexion->query("SELECT gasto FROM gastos WHERE num_semana=1");
  }

  public function ventaDos(){
    return $this->conexion->query("SELECT venta FROM ventas WHERE num_semana=2");
  }
  public function gastoDos(){
    return $this->conexion->query("SELECT gasto FROM gastos WHERE num_semana=2");
  }
  public function totalUno(){
    return $this->conexion->query("SELECT venta,num_semana FROM ventas");
  }
   public function totalDos(){
    return $this->conexion->query("SELECT gasto,num_semana FROM gastos");
  }
  //return directo de la funcion, se puede guardar en una variable, y hacer return:
 

}
 ?>