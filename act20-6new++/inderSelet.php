<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!index para imprimir con furmalrio y select...  php generamos objetos...>
    <?php
      include "dbNBA.php";
      $nba= new dbNBA();
      //creamos variables para guardar resultado de la funcion, el objeto llama $local,$visitante,$temporadas...
      $local = $nba->getEquipos();
      $visitante = $nba->getEquipos();
      $temporadas= $nba->getTemporadas();
      ?>
  </head>
  <body>
    <!formulario con select, como inut con name... dentro otr vez php bucle MIRAR MAS CON SELECT .....>
    <form class="" action="filtrado.php" method="post">
        <label for="equipolocal">Equipo Local</label><br>
      <select name="equipolocal">
        <?php
        //aparece array para igualar y imprimir    ver bucle con option..
          while ($fila=$local->fetch_assoc()) {
            echo "<option value=".$fila['Nombre'].">".$fila['Nombre']."</option>";
            }
         ?>
      </select><br>
        <label for="equipov">Equipo Visitante</label><br>
      <select name="equipov">
        <?php
          while ($fila=$visitante->fetch_assoc()) {
            echo "<option value=".$fila['Nombre'].">".$fila['Nombre']."</option>";
            }
         ?>
      </select><br>
        <label for="temporada">Temporada</label><br>
      <select name="temporada">
        <?php
        while ($fila=$temporadas->fetch_assoc()) {
          echo "<option value=".$fila['temporada'].">".$fila['temporada']."</option>";
          }
          ?>
        </select>
      <input type="submit" name="" value="filtrar">

    </form>
  </body>
</html>
