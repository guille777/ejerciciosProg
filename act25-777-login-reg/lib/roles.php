<?php
include "db.php";
class Rol extends db{
	
	function __construct()
	{
		parent::__construct();
	}


//com roles?
    public function selectRoles(){
  		return $this->conexion->query("SELECT * FROM roles");
  	}
}
?>
