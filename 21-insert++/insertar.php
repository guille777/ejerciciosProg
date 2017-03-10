<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
include "dbNBA.php";
    $nba=new dbNBA();
        //Incluimos clase, creamos nuevo objeto new, estructura de control para ver las posibilidades de post y imprimir con funciones y array
        if (!empty($_POST['nombre']) && !empty($_POST['ciudad']) && !empty($_POST['conferencia']) && !empty($_POST['division'])){

            $resultadoInsert=$nba->insertarEquipos($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
            //Devolver el equipo insertado ampliar por id...-->  select+insert+update+delete
              if($resultadoInsert==true){
                $resultado=$nba->devolverUltimoEquipo($_POST['nombre']);
                $fila=$resultado->fetch_assoc();
                echo "Nombre: ".$fila["Nombre"]."</br>";
                echo "Ciudad: ".$fila["Ciudad"]."</br>";
                echo "Conferencia: ".$fila["Conferencia"]."</br>";
                echo "Division: ".$fila["Division"]."</br>";
                }
              }  
        //se puede ampliar a todas las casualidades pero se puede hacer desde el frontal
        elseif (empty($_POST['nombre']) && empty($_POST['ciudad']) && empty($_POST['conferencia']) &&empty($_POST['division'])) {

            echo "esta vacio"."<br>"."<br>";
        }
        //buscado se puede hacer con J.S xd
       $botonAtras = htmlspecialchars($_SERVER['HTTP_REFERER']);
            echo "<a href='$botonAtras'>Volver</a>.<br>";
?>
</body>
</html>















