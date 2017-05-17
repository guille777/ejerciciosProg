<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/formulario.css">
  <style>
  h2.fail{
    color: red;
  }
   h2.succes{
    color: green;
  }
</style>
</head>
<body>
<!-- <h2 class="succes">REGISTRATE PARA PODER HACER LOGGIN</h2> -->
<?php
if(isset($_POST["accion"])){
  include "lib/usuario.php";
  include "lib/seguridad.php";
      $user=new usuario();
      $seguridad = new Seguridad();
      //Registro de usuario buscamos registro, y decimos si no estan vacios los campos de post,ontraseñas
      if($_POST["accion"]=="registro"){
        if (!empty($_POST["usuario"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["email"]) && !empty($_POST["contr1"])) {
          if($_POST["contr1"]==$_POST["contr2"]){
            //se puede mejoar con un select de roles, que ataca o recoge la tabla roles en BD
            $rol="usuario";
            $resultado=$user->insertarUsuario($_POST["usuario"],$_POST["nombre"],$_POST["apellidos"],$_POST["email"],$rol,$_POST["contr1"]);
            if($resultado!=null)
            {
              echo "<h2 class='succes'>Usuario registrado correctamente</h2></br>";
              $resultado=$user->buscarUsuarioInsert($_POST["usuario"]);
                foreach ($resultado as $key => $fila) {
                  echo "nombre : ".$fila["nombre"]."<br>";
                  echo "apellidos: ".$fila["apellidos"]."<br>";
                  echo "usuario : ".$fila["usuario"]."<br>";
                }
                echo "<a href=login.php>Ves a login</a>";
            //no me muestra la informacion insertada porque me redirecciona a index.....+++                
            // header('Location: index.php');          
            }else{
              //Usuario no insertado
              echo "<h2 class='fail'>El usuario no ha sido insertado. Revisa los datos</h2></br>";
              echo "<a href=login.php>Ves a login</a>";
            }
          }else{
            //Contraseñas diferentes
            echo "<h2>Las contraseñas no son iguales</h2></br>";
          }
        }else{
          //Datos en blanco
          header('Location: registro.php');
        }
        
      }
}
if (empty($_POST)) {
  
?>
    <form  action="registro.php" method="post">
        <h1>Registrarse</h1>

        <label>usuario</label><br>
        <input type="text" name="usuario" value="" required><br><br>
         <label>Nombre</label><br>
        <input type="text" name="nombre" value="" required><br><br>
         <label>Apellidos</label><br>
        <input type="text" name="apellidos" value="" required><br><br>
         <label>Email</label><br>
        <input type="text" name="email" value="" required><br><br>

        <label>Contraseña</label><br>
        <input type="password" name="contr1" value="" required><br><br>
        <label>Repite Contraseña</label><br>
        <input type="password" name="contr2" value="" required><br><br>
       
        <input type="hidden" name="accion" value="registro">
        <input type="submit" name="" value="registrarse">

        <a href="login.php">Volver</a>       
    </form>
  <?php } ?>
</body>
</html>