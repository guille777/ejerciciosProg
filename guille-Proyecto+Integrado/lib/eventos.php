<?php
include "db.php";
/**
 *
 */
class eventos extends db{

  private $error=false;
  private $error_msj="";

  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }
    //Devolvemos todos los usuarios SDEVUELVE TABLA ARRAY ASOCIATIVO, CON ITERATORS PUEDES HACER RETURN DE $RESULTADO Y CON FOREACH MOSTRAR....   adaptar
  function devolverEventos(){
    if($this->error==false){
      $sql="SELECT * from eventos";
        return $resultado=$this->realizarConsulta($sql);
     }else{
       $this->error_msj="Imposible realizar la consulta: ".$consulta;
        return null;
      } 
  }

  function devolverEventosInsert($titulo){
    if($this->error==false){
      $sql="SELECT * from eventos WHERE titulo='".$titulo."' ";
        return $resultado=$this->realizarConsulta($sql);
     }else{
       $this->error_msj="Imposible realizar la consulta: ".$consulta;
        return null;
      } 
  }

 //faltan control de errores etc.. diferentes casos asi es bruto?...
public function insertarEvento($titulo,$subtitulo,$descripcion,$categoria,$fecha,$imagen){
  $sqlInsercion="INSERT INTO eventos(id,titulo,subtitulo,descripcion,categoria,fecha,imagen) Values(NULL,'".$titulo."','".$subtitulo."','".$descripcion."','".$categoria."','".$fecha."','".$imagen."')";
    if($this->realizarConsulta($sqlInsercion)){
      return true;
    }else{
      return false;
    }
}
public function actualizarEvento($titulo,$subtitulo,$descripcion,$categoria,$fecha,$imagen){
    $sqlActualizar="UPDATE eventos SET titulo='".$titulo."',subtitulo='".$subtitulo."',descripcion='".$descripcion."',categoria='".$categoria."',fecha='".$fecha."',imagen='".$imagen."' WHERE titulo='".$titulo."'  ";
     return $resultado=$this->realizarConsulta($sqlActualizar);
  }
  //PLANTILLAS PARA REALIZAR CODIGO DEL PROYECTO NTEGRADO, FVI VENTA E INTERCAMBIO....CRUD+LOGIN
  public function borrarEvento($titulo){
    $deleteSql="DELETE FROM eventos WHERE titulo='".$titulo."'";
      if($this->realizarConsulta($deleteSql)){
        return true;
      }else{
        return false;
      }
  }















// public function aztualizarNoticia($titulo,$subtitulo,$descripcion,$categoria,$fecha,$imagen){
//   $sqlActualizar="UPDATE eventos SET titulo='".$titulo."',subtitulo='".$subtitulo."',descripcion='".$descripcion."' WHERE Nombre='".$nombre."' ";
//       $this->conexion->query($sqlActualizar);
// }










// public function devolverUltimoEquipo($equipo){
//   $sql="SELECT * FROM equipos WHERE Nombre = '".$equipo."'";
//     $resultado=$this->realizarConsulta($sql);
//       $tabla=[];
//         $fila=$resultado->fetch_assoc();
//           $tabla[]=$fila;
//     return $tabla;
// }



// public function borrarEquipo($nombre){
//   $deleteSql="DELETE FROM equipos WHERE Nombre='".$nombre."' ";
//    $this->conexion->query($deleteSql);
// }

}
?>