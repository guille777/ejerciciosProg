<?php
include "db.php";
/**
 *
 */
class equipo extends db{

  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }

  //Devolvemos todos los usuarios...SE PUEDE HACER RETURN DE $RESULTADO Y LOS ITERATORS DE PHP MUESTRAN CON FOREACH EN TEST...
  function devolverEquipos(){
  //Construimos la consulta
  $sql="SELECT * from equipos ";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
      if($resultado!=null){
                //Montamos la tabla de resultados
          $tabla=[];
          while($fila=$resultado->fetch_assoc()){
            $tabla[]=$fila;
          }
        return $tabla;
      }else{
        return null;
        }
  }
  //al pasar VALUES, comillas simples porque es un string en DB, y luego comillas dobles...sqlinsercion= variable para almacenar insert, conexion objeto php que ejecuta funcion de mysqli query a database...
public function insertarEquipos($nombre,$ciudad,$conferencia,$division){
  $sqlInsercion="INSERT INTO equipos(Nombre,Ciudad,Conferencia,Division) Values('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
    $this->conexion->query($sqlInsercion);
}
public function aztualizarEquipo($nombre,$ciudad,$conferencia,$division){
  $sqlActualizar="UPDATE equipos SET Ciudad='".$ciudad."',Conferencia='".$conferencia."',Division='".$division."' WHERE Nombre='".$nombre."' ";
      $this->conexion->query($sqlActualizar);
}
public function borrarEquipo($nombre){
  $deleteSql="DELETE FROM equipos WHERE Nombre='".$nombre."' ";
  $this->conexion->query($deleteSql);
}

public function devolverUltimoEquipo($equipo){
  $sql="SELECT * FROM equipos WHERE Nombre = '".$equipo."'";
    $resultado=$this->realizarConsulta($sql);
      $tabla=[];
        $fila=$resultado->fetch_assoc();
          $tabla[]=$fila;
    return $tabla;
}



}
?>