<?php 
/*
<?php
  if(isset($_COOKIE['usuario']))
  { 
    // La pondremos un tiempo  de caducidad de  un año 
    setcookie('usuario', $_COOKIE['usuario'] + 1, time() + 365 * 24 * 60 * 60); 
    $texto = 'Ha visitado esta página : ' . $_COOKIE['usuario']; 
  } 
  else 
  { 
    // Es la primera vez que se visita la web
    setcookie('usuario', 1, time() + 365 * 24 * 60 * 60); 
    $mensaje = 'Hola. Eres Bienvenido a nuestra  web'; 
  } 
?> 
*/
?>
<?php
error_reporting(0);
  if(isset($_POST['datos']) && $_POST['datos'] == 'Enviar' ){
     setcookie("color", $_POST['color'], time()+365*24*60*60);
     $Valor=$_POST['color'];
       var_dump($_COOKIE);
       $tabla=$_COOKIE;
         foreach ($tabla as $key => $value) {
           echo $key."<br>";
           echo $value;
         }
  }
   else{
    //superglobal coockie... se le pasa color? -->hacer usando sesiones 
     $Valor= $_COOKIE['color'];
   }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Language" content="es">
    <title>Cambio de color de fondo</title> </head>
  </head>
  <body>
      <?php // ponemos el color de fondo
        switch ($Valor) {
         case "azul":
          echo "<body bgcolor=\"#0099FF\">" ;
         break;
         case "verde":
          echo "<body bgcolor=\"#008000\">" ;
         break;
         case "rojo":
          echo "<body bgcolor=\"#FF6666\">" ;
         break;
        }
      ?>
      <h1 align="center"> Cambiamos el color de fondo</h1>
      <p align="center"> <b><font size="4">Sencillo código para usar Cookies</font></b></p>
        <form method="POST" action="index.php">
          <section align="center">
            <select size="1" name="color">
              <option><? echo $_POST['color'];?></option>
              <option>azul</option>
              <option>verde</option>
              <option>rojo</option>
            </select>
            <input type="submit" value="Enviar" name="datos">
          </section>
        </form>
  </body>
</html>
