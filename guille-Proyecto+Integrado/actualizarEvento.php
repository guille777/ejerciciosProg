<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="./css/formulario.css">
  <link rel="stylesheet" href="./css/test.css">
</head>
<body>
  
<section>
    <article class="parte2">
      <form class="" action="actualizarEvento2.php" method="post">
        <h1>ACTUALIZA UN ARTICULO</h1>
        <input type="text" name="titulo" value="<?=$_GET["titulo"]?>" placeholder="Introduce un titulo" required readonly=""><br>
        <input type="text" name="subtitulo" value="<?=$_GET["subtitulo"]?>" placeholder="Introduce una subtitulo" required><br>
        <textarea name="descripcion">
          

        </textarea><br>
        <input type="text" name="categoria" value="<?=$_GET["categoria"]?>" placeholder="Introduce una categoria" required><br>
        <input type="file" name="imagen" value="Elije archivo" placeholder="Introduce una imagen" required><br>
        <input type="hidden" name="accion" value="actualizar">
        <input type="submit" name="" value="actualiza">
        <a href="nuevanoticia22.php">Volver</a>
      </form>
      
    </article>
  </section>
  
</body>
</html>

