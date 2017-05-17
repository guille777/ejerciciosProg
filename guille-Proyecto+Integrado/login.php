<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="css/formulario.css">
</head>
<body>
<?php
// error_reporting(0);

//En php llamamos desde index al campo accion del formulario==login, include de la clase+objeto
if(isset($_POST["accion"])){
		if ($_POST["accion"]=="login") {
			include "lib/usuario.php";
			include "lib/seguridad.php";

			$user=new usuario();
			$seguridad = new Seguridad();
		 
	        $resultado=$user->buscarLogin($_POST["usuario"]);
	        if($resultado!=null){
	          //Comparamos los passwords     CON sha1 esta encriptado...
	          if($resultado["pass"]==sha1($_POST["contr1"])){
	          	//con esta funcion hace sesion start en miperfil.php
	       		$seguridad->addUsuario($_POST["usuario"]);

	            header('Location: miperfil.php');         
	            // $seguridad->addUsuario($resultado["usuario"]);
	          }else{
	            echo "<h2 class='fail'>Las contraseñas no coinciden</h2></br>";
	          }
	        }else{
	          echo "<h2 class='fail'>Usuario no encontrado</h2></br>";
	        }
	      }
}
 ?>
	  <article class="medio">
  		<form class="" action="login.php" method="post">
        <h1>Haz Login :</h1>
        
        <label>Usuario</label><br>
        <input type="text" name="usuario" value="" placeholder="usuario"><br><br>    
        <label>Contraseña</label><br>   
        <input type="password" name="contr1" value="" placeholder="Introduce una contraseña"><br><br>
        
        <input type="hidden" name="accion" value="login">

        <input type="submit" name="" value="entrar">
        <br>
        <a href="registro.php">Registrarse</a>
        <a href="index.php">volver</a>
      </form>
  </article>
</body>
</html>
	
</body>
</html>