<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/test.css">
  </head>
  <body>
  <!--required,placeholder...  name  $_POST || $_GET -->
  <section>
    <article class="medio">
      <form class="" action="actualizarDBJugador.php" method="post">
        <h1>Actualiza el jugador</h1>
        <input type="text" name="codigo" value="<?=$_GET["codigo"]?>" readonly="readonly"><br><br>
        <input type="text" name="nombre" value="<?=$_GET["Nombre"]?>" placeholder="Introduce un Nombre"><br><br>
        <input type="text" name="procedencia" value="<?=$_GET["Procedencia"]?>" placeholder="Introduce una Conferencia"><br><br>
        <input type="text" name="altura" value="<?=$_GET["Altura"]?>" placeholder="Introduce una Division"><br><br>
         <input type="text" name="peso" value="<?=$_GET["Peso"]?>" placeholder="Introduce una Division"><br><br>
         <input type="text" name="posicion" value="<?=$_GET["Posicion"]?>" placeholder="Introduce una Division"><br><br>
         <input type="text" name="Nombre_equipo" value="<?=$_GET["Nombre_equipo"]?>" readonly="readonly"><br><br>
        <input type="submit" name="" value="actualizar">
      </form>
    </article>
  </section>
  </body>
</html>