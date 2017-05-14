<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/test.css">
</head>
<body>
<!-- <h2 class="succes">REGISTRATE PARA PODER HACER LOGGIN</h2> -->
<?php
error_reporting(0);
if($_POST["accion"]=="registro"){
      include "./lib/usuario.php";
      include "./lib/seguridad.php";
       // include "./lib/roles.php";
      $user=new usuario();
      $seguridad = new Seguridad();
      // $rol = new rol();
      //Registro de usuario buscamos registro, y decimos si no estan vacios los campos de post,ontraseñas
          if (!empty($_POST["usuario"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["email"]) && !empty($_POST["contr1"])) {
            if($_POST["contr1"]==$_POST["contr2"]){
              $rol="usuario";
              if (!$user->checkearEmail($_POST["email"])) {
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
                      echo "<a href=index.php>Ves a login</a>";
                  //no me muestra la informacion insertada porque me redirecciona a index.....+++                
                  // header('Location: index.php');          
                  }else{
                    //Usuario no insertado
                    echo "<h2 style='color:red; background-color:#FFF;'>El usuario no ha sido insertado. Revisa los datos</h2></br>";
                  }
              }else{
                 echo "<h2 style='color:red; background-color:#FFF;'>este email ya existe</h2></br>";
              }
            }else{
              //Contraseñas diferentes

              echo "<h2 style='color:red; background-color:#FFF;'>Las contraseñas no son iguales</h2></br>";
            }
          }else{
            //Datos en blanco
             echo "<h2 style='color:red; background-color:#FFF;'>Las datos estan en blanco </h2></br>";
            
          }
          ?>
          <form  action="registro.php" method="post">
              <h1>Registrarse</h1>

              <label>usuario</label><br>
              <input type="text" name="usuario" value="<?php echo $_POST['usuario']; ?>" required><br><br>
               <label>Nombre</label><br>
              <input type="text" name="nombre" value="<?php echo $_POST['nombre']; ?>" required><br><br>
               <label>Apellidos</label><br>
              <input type="text" name="apellidos" value="<?php echo $_POST['apellidos']; ?>" required><br><br>
               <label>Email</label><br>
              <input type="text" name="email" value="<?php echo $_POST['email']; ?>" required><br><br>

              <label>Contraseña</label><br>
              <input type="password" name="contr1" value="" required><br><br>
              <label>Repite Contraseña</label><br>
              <input type="password" name="contr2" value="" required><br><br>             
              <input type="hidden" name="accion" value="registro">
              <input type="submit" name="" value="registrarse"> 
              <a href="index.php">Volver</a>      
          </form>

          <?php
}else{
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
       <!--  <select name="roles">
          <option value="">ELIGE UN ROL</option>
          <option value="user">USER</option>
          <option value="admin">ADMIN</option>
          <option value="superadmin">SUPERADMIN</option>
        </select> -->
        <input type="hidden" name="accion" value="registro">
        <input type="submit" name="" value="registrarse"> 
        <a href="index.php">Volver</a>      
    </form>
  <?php   }?>
</body>
</html>

       