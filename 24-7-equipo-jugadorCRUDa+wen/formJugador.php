
  <section>
    <article class="medio">
      <form class="" action="insertarJug.php" method="post">
        <h1>INSERTA UN JUGADOR</h1>
        <input type="text" name="codigo" value="" placeholder="Introduce un Codigo"><br><br>
        <input type="text" name="nombre" value="" placeholder="Introduce un Nombre"><br><br>
        <input type="text" name="procedencia" value="" placeholder="Introduce una Procedencia"><br><br>
        <input type="text" name="altura" value="" placeholder="Introduce una Altura"><br><br>
        <input type="text" name="peso" value="" placeholder="Introduce un Peso"><br><br>
        <input type="text" name="posicion" value="" placeholder="Introduce una Posicion"><br><br>
          <select name="Nombre_equipo">
            <option>Elige un equipo</option>
              <?php
              $resultado=$jugador->SelectEquipoLocal();
                foreach ($resultado as $fila) {
              ?>
            <option value="<?php echo $fila['Nombre']; ?>"><?php echo $fila['Nombre']; ?>   </option>
              <?php } ?>
        </select>
        <input type="submit" name="" value="insertar">
      </form>
    </article>
  </section>
