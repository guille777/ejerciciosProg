<?php
  class db{
    //-- Variables de Identificacion --\\
    private $ip="localhost";
    private $usuario="root";
    private $contraseña="root";
    private $db="usuarios";
    //objeto conexion para atacar a todo recojer,    control de errores++
    protected $conexion;
    private $error=false;
    private $error_msj="";

    function __construct(){
      $this->conexion = new mysqli($this->ip, $this->usuario, $this->contraseña, $this->db);
      if ($this->conexion->connect_errno){
        $this->error=true;
      }
    }

    public function getErrorConexion(){
      return $this->error;
    }
    function msjError(){
    return $this->error_msj;
  }

  public function realizarConsulta($consulta){
    if($this->error==false){
      return $resultado = $this->conexion->query($consulta);
    }else{
      $this->error_msj="Imposible realizar la consulta: ".$consulta;
      return null;
    }
  }
  
}
?>