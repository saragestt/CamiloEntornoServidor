<?php
//Todas las constantes se ponen sin $
define("VERSION", "1.0.0");
const PHP_V = 8.3;
define("COPYRIGHT","Nombre comunidad (@nombre)");
define("CREATED", "YYYY");

$a = 10;
$b = "10";
$c = 20;


var_dump($a == $b); //Comparamos solo dato con ==
var_dump($a === $b); //Comparamos tipo y dato con ===

var_dump($a != $b); //Distinto / diferente
var_dump($a < $b);
var_dump($a > $b);
var_dump($a <= $b);
var_dump($a >= $b);

//Operadores especiales combinados
//Da -1 si el valor de la izquieerda es menor 
//Da 0 si son iguales 
//Da 1 si el valor de la izquierda es mayor
echo 2 <=> 3; //-1
echo 3 <=> 3; //0
echo 4 <=> 3; //1

$usuario = null; //Creamos una variable en memoria con valor vacio
if($usuario){
    echo"Existe usuario en el if";
}

//Operadores Coalescing
$nombre = $usuario ?? "Camilo";
echo $nombre;

//Operador de fusion nula con asignación
$color = "null";
$color ??= "rojo";

$colorB = null;
$colorB ??= "azul";

echo "<br>" . $color;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
    <?php echo VERSION; ?>
    <?php echo __FILE__; ?>
    <?php echo PHP_OS; ?>
</p>

</body>
</html>