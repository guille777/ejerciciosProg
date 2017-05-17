<?php
include "lib/seguridad.php";
$seguridad=new Seguridad();
  if($seguridad->getUsuario()==null){
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Página protegida</title>
    <link rel="stylesheet" href="./css/test.css">
  </head>
  <body>
    <div>
      <h2>Estoy dentro. Tu usuario es <?=$seguridad->getUsuario()?></h2>
      <form method="post" action="protegida.php">
        <input type="hidden" name="accion" value="logout">
        <input type="submit" value="LogOut">
      </form>
    </div>
    <?php
    if(isset($_POST["accion"])){
        if ($_POST["accion"]=="logout") {
        $seguridad->logOut();
        echo "<h2>LogOut, sesion cerrada</h2></br>";
        echo "<a href=index.php>Sal y vuelve al principio</a>";
        }
    }    
    ?>
  </body>
</html>