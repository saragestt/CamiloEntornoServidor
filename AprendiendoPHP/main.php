<?php
$tienCoche = true;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo html</h1>

    <?php

    //Comentario en linea
    /*Comentario en 
    bloque*/
        $saludar = "<h2>Hola mundo desde PHP</h2>";
        echo $saludar;
        $valorPrint = print($saludar);
        echo $valorPrint;
        echo "<br><br><p>Hola a todos</p>";
        echo $tienCoche . "-> 1 es true y 0 es false";

    ?>
    <p>
        Este es un p en html 

    </p>
    <?php
    echo $saludar;
    ?>

    <?php
    if($tienCoche == true){
    ?>
    <h5>Si tiene coche</5>

    <?php
    } 
    else{
    ?>

    <button type="button">No tiene</button>
    <?php
    }
    ?>
    

    


</body>
</html>