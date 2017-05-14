<?php

include "./lib/usuario.php";
// include "./lib/roles.php";
$user=new usuario();
include "./lib/seguridad.php";
$seguridad = new Seguridad();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="./css/test.css">
</head>

<body>
<?php
//si no hay usuario que entra, redirige a indeX, o si se entra de golpe....
if ($seguridad->getUsuario() == null) {
header('Location: index.php');  
}
	

	if(isset($_POST["accion"])){
		if ($_POST["accion"]=="actualizar") {						 
		        $resultado=$user->actualizarUsuario($_POST['email'],$_POST['nombre'],$_POST['apellidos']);
		        if($resultado!=null){
		           echo "<h2>usuario actualizado</h2></br>";
		           header('Location: protegida.php'); 
		        }else{
		          echo "<h2>usuario no actualizado</h2></br>";
		        }
		}
	}
	// $roles = new Rol();
	// $allRoles=$roles->selectRoles();
	//preparamos para recoger los datos en el formulario de actualizar	
	$resultado = $user->buscarUsuario($seguridad->getUsuario());
	if ($resultado != false) {
		$data=[];
		foreach ($resultado as $key => $fila) {
			$data=$fila;
		}
	}

?>
<form  action="miperfil.php" method="post">
<h1>Actualizar</h1>

<label>Nombre</label><br>
<input type="text" name="nombre" value="<?php echo $data['nombre']; ?>" required><br><br>
<label>Apellidos</label><br>
<input type="text" name="apellidos" value="<?php echo $data['apellidos']; ?>"  required><br><br>
<label>Email</label><br>
<input type="text" name="email" value="<?php echo $data['email']; ?>"  required><br><br>
<label>Roles</label><br>
<select name="" id=""></select>     
        <input type="hidden" name="accion" value="actualizar">
        <input type="submit" name="" value="actualizar">        
      </form>
</body>
</html>

