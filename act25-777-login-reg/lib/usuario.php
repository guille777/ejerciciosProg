<?php
include "db.php";
/**
*
*/
class usuario extends db{
	
	function __construct()
	{
		parent::__construct();
	}
	//rol?          insertar se le pasa id->CP null... ,  en update no se le pasa no se puede cambiar... 
	public function insertarUsuario($usuario,$nombre,$apellidos,$email,$rol="usuario",$password){
		
		// if($this->buscarUsuario($usuario) != false){
	 //   		echo "Existe un usuario con este nombre de usuario";
		// 	return false;
		// }

		// if ($this->checkearEmail($email)) {
		// 	echo "Existe un usuario con este email";
		// 	return false;
		// }

	  $sqlInsercion="INSERT INTO usuariosdaw(id,usuario,nombre,apellidos,email,rol,pass) Values(NULL,'".$usuario."','".$nombre."','".$apellidos."','".$email."','".$rol."','".sha1($password)."')";
	     $resultado=$this->realizarConsulta($sqlInsercion);
	     if ($resultado!=null) {
	     	return true;
	     }else{
	     	return false;
	     }
	}

	public function checkearEmail($email){
	  $sqlInsercion="SELECT * FROM usuariosdaw WHERE email='".$email."'";
	     $resultado=$this->realizarConsulta($sqlInsercion);
	     // var_dump($resultado->num_rows);
	     // die();
	     if ($resultado->num_rows != null) {
	     	return true;
	     }else{
	     	return false;
	     }
	}
	// public function checkUserByUserAndPass($usuario){		
	// 	$sql="SELECT * FROM usuariosdaw WHERE usuario='".$usuario."' ";
	// 	return $resultado=$this->realizarConsulta($sql);
	// }
	// public function prueba1(){
	// 	$sql="SELECT * FROM usuariosdaw ";
	// 	return $resultado=$this->realizarConsulta($sql);
	// }
	 function buscarUsuario($user){
	    //Construimos la consulta
	    $sql="SELECT * from usuariosdaw WHERE usuario='".$user."'";
	    //Realizamos la consulta
	    $resultado = $this->realizarConsulta($sql);
	    if ($resultado->num_rows != null) {
	     	return $resultado;
	     }else{
	     	return false;
	     }
	}
	function buscarLogin($usuario){
	    //Construimos la consulta  OPCION CON fetch_assoc     devuelve objeto mysqli
	    $sql="SELECT * from usuariosdaw WHERE usuario='".$usuario."'";
	    //Realizamos la consulta
	    $resultado=$this->realizarConsulta($sql);
	    if($resultado!=false){	      
	        return $resultado->fetch_assoc();
	    }else{
	        return null;
	      }	    
  	}
  	 function buscarUsuarioInsert($usuario){
	    //Construimos la consulta
	    $sql="SELECT * from usuariosdaw WHERE usuario='".$usuario."'";
	    //Realizamos la consulta
	    return $resultado=$this->realizarConsulta($sql);
	}

  	// function buscarLogin($usuario){
	  //   //Construimos la consulta  OPCION CON fetch_assoc     devuelve objeto mysqli
	  //   $sql="SELECT * from usuariosdaw WHERE usuario='".$usuario."'";
	  //   //Realizamos la consulta
	  //   $resultado=$this->realizarConsulta($sql);
	  //   if($resultado!=false){
	  //     if($resultado!=false){
	  //       return $resultado->fetch_assoc();
	  //     }else{
	  //       return null;
	  //     }
	  //   }else{
	  //     return null;
	  //   }
  	// }
	//DEBERIA FILTRARSE POR UN AMPO UNICO COMO USUARIO.... O EMAIL...ETC
  	public function actualizarUsuario($email,$nombre,$apellidos){
  		$sqlActualizar="UPDATE usuariosdaw SET email='".$email."',nombre='".$nombre."',apellidos='".$apellidos."' WHERE nombre='".$nombre."'";
  		return $resultado=$this->realizarConsulta($sqlActualizar);
  	}
  	//cpm roles?
    public function selectRoles(){
  		return $this->conexion->query("SELECT distinct(rol) FROM roles  GROUP BY rol ASC");
  	}
	// public function actualizarEquipo($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$Nombre_equipo){
	// 	$sqlActualizar="UPDATE jugadores SET codigo='".$codigo."',Nombre='".$nombre."',Procedencia='".$procedencia."',Altura='".$altura."',Peso='".$peso."',Posicion='".$posicion."',Nombre_equipo='".$Nombre_equipo."' WHERE codigo='".$codigo."' ";
	// 	$this->conexion->query($sqlActualizar);
	// }

	// public function borrarJugador($codigo){
	//   $deleteSql="DELETE FROM jugadores WHERE codigo='".$codigo."' ";
	//   	$this->conexion->query($deleteSql);
	// }

	// public function devolverUltimoUsuario($codigo){
	//   $sql="SELECT * FROM jugadores WHERE codigo = '".$codigo."' ";
	//     return $resultado=$this->realizarConsulta($sql);
	// }
	
	// public function devolverJugador(){
	// 	$sql="SELECT * FROM jugadores";
	// 	return $resultado=$this->realizarConsulta($sql);
	// }

	// public function SelectEquipoLocal(){
 //    	return $this->conexion->query("SELECT distinct(Nombre) FROM equipos  GROUP BY Nombre ASC");
 //  	}
}
?>