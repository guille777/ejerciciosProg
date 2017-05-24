<?php
/**
 * Clase encargada del control de seguridad de la app,usuarios despues cookies
 */
class Seguridad{

  private $usuario=null;
  //viene el sesion start en el construct, despues genero funciones para añadir el usuario y poder entrar para despues hacer logout
  function __construct()
  {
    //Arrancamos la sesion
    session_start();
    if(isset($_COOKIE["usuario"])) $this->usuario=$_COOKIE["usuario"];
  }
  public function getUsuario(){
    return $this->usuario;
  }
  public function addUsuario($usuario){
    $_COOKIE["usuario"]=$usuario;
    $this->usuario=$usuario;
  }
  public function logOut(){
    $_COOKIE=[];
    session_destroy();
  }
  /**/
  //   public function cookies(){
  //   if (isset($_COOKIE['fondo'])) {
  //     $fondo=$_COOKIE['fondo'];
  //     return $fondo;
  //   }else{
  //     return null;
  //   }
  // }

}
 ?>