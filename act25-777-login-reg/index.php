<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/test.css">
</head>
<style>
	 h2.fail{
    color: red;
  }
   h2.succes{
    color: green;
  }
</style>
<body>
<h2 class="succes">HAZ LOGIN O VES A REGISTRARTE</h2>
<?php
		// error_reporting(0);

		//En php llamamos desde index al campo accion del formulario==login, include de la clase+objeto
if(isset($_POST["accion"])){
		if ($_POST["accion"]=="login") {
			include "./lib/usuario.php";
			include "./lib/seguridad.php";

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
	            echo "<h2 style='color:red; background-color:#FFF;'>Las contraseñas no coinciden</h2></br>";
	          }
	        }else{
	          echo "<h2 style='color:red; background-color:#FFF;'>Usuario no encontrado</h2></br>";
	        }
	        ?>

				 <article class="medio">
				  <form class="" action="index.php" method="post">
				        <h1>Haz Login :</h1>
				        
				        <label>Usuario</label><br>
				        <input type="text" name="usuario" value="<?php echo $_POST["usuario"];?>" placeholder="usuario"><br><br>    
				        <label>Contraseña</label><br>   
				        <input type="password" name="contr1" value="" placeholder="Introduce una contraseña"><br><br>
				        
				        <input type="hidden" name="accion" value="login">

				        <input type="submit" name="" value="entrar">
				        <br>
				        <a href="registro.php">Registrarse</a>
				      </form>
				  </article>


	        <?php
	      }
}else{


 ?>
  <article class="medio">
  <form class="" action="index.php" method="post">
        <h1>Haz Login :</h1>
        
        <label>Usuario</label><br>
        <input type="text" name="usuario" value="" placeholder="usuario"><br><br>    
        <label>Contraseña</label><br>   
        <input type="password" name="contr1" value="" placeholder="Introduce una contraseña"><br><br>
        
        <input type="hidden" name="accion" value="login">

        <input type="submit" name="" value="entrar">
        <br>
        <a href="registro.php">Registrarse</a>
      </form>
  </article>
 <?php } ?>
</body>
</html>