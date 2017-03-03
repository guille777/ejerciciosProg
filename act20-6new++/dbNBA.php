<?php
class dbNBA{

	private $host="localhost";
	private $user="root";
	private $pass="";
	private $db_name="nba";
	//conexion sera objeto, y control de errores....
	private $conexion;
	private $error=false;


  function __construct(){
    $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
    if ($this->conexion->connect_errno){
      $this->error=true;
    }
  }
  public function getErrorConexion(){
    return $this->error;
  }
  public function getResultado($equipol){
    if ($this->error==false) {
      $resultado=$this->conexion->query("SELECT * FROM partidos WHERE equipo_local = '".$equipol."'");
      while ($fila=$resultado->fetch_assoc()) {
        echo $fila["equipo_local"]."<br>";
        echo $fila["equipo_visitante"]."<br>";
        echo $fila["puntos_local"]."<br>";
        echo $fila["puntos_visitante"]."<br>";
        echo $fila["temporada"]."<hr>";
        }
    }
    else{
      return null;
    }
  }
public function resultadoTriple($equipolocal,$equipov,$temporada){
  if ($this->error==false) {
    $resultado=$this->conexion->query("SELECT * FROM partidos WHERE equipo_local = '".$equipolocal."' AND equipo_visitante='".$equipov."' AND temporada='".$temporada."' ");
    while ($fila=$resultado->fetch_assoc()) {
      echo $fila["equipo_local"]."<br>";
      echo $fila["equipo_visitante"]."<br>";
      echo $fila["puntos_local"]."<br>";
      echo $fila["puntos_visitante"]."<br>";
      echo $fila["temporada"]."<hr>";
      }
    }
  else{
    return null;
  }
}
public function getEquipos(){
  if ($this->error==false) {
    return $this->conexion->query("SELECT e.Nombre FROM equipos e");
  }else {
    return null;
  }
}
  public function getTemporadas(){
    if ($this->error==false) {
        return $this->conexion->query("SELECT DISTINCT(p.temporada) FROM partidos p");
    }else {
      return null;
    }
  }

//adjunto funcion que trabaja Alejandro Ajenjo para ver todas las alternativas y estructuras de control, para ir actualizando y trabajando:

// public function mostrarPartidosDos($equipo_local,$equipo_visitante,$temporada1_select){
//
//        $consulta="SELECT * FROM partidos";
//
//         if (!empty($equipo_local)) {
//             $consulta=$consulta." WHERE equipo_local='".$equipo_local."'";
//             if (!empty($equipo_visitante)) {
//               $consulta=$consulta." AND equipo_visitante='".$equipo_visitante."'";
//             }
//             if (!empty($temporada1_select)) {
//               $consulta=$consulta." AND temporada='".$temporada1_select."'";
//             }
//             return $this->conexion->query($consulta);
//         }
//         elseif (!empty($equipo_visitante)) {
//           $consulta=$consulta." WHERE equipo_visitante='".$equipo_visitante."'";
//           if (!empty($temporada1_select)) {
//             $consulta=$consulta." AND temporada='".$temporada1_select."'";
//           }
//             return $this->conexion->query($consulta);
//         }
//         elseif (!empty($temporada1_select)) {
//           $consulta=$consulta." WHERE temporada='".$temporada1_select."'";
//           return $this->conexion->query($consulta);
//         }else {
//           return $this->conexion->query($consulta);
//         }
// }

}
 ?>
