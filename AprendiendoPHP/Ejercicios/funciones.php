<?php

function saludar($nombre=null, $edad = 27): void
{
    echo "Hola mundo \n" .$nombre . "\n";
    echo "Edad: " . $edad . "\n";
    echo "<br>";
}
saludar();
saludar("Camilo");
saludar("Camilo", 30);
echo "<br>";


function  incremento($edad): void
{
    $edad++;
}

function incrementarEdad($edad): int {
    $edad++;
    return $edad;
}

function incrementoSinReturn(&$edad): void{ //El & hace que lo actualice pero no lo muestra
    $edad++;
}


$edad = 27;
incremento($edad);
echo $edad; //27


echo "<br>";
$edad = incrementarEdad($edad);
echo $edad; //28


echo "<br>";
incrementoSinReturn($edad);
echo $edad;

function connectionBD(string $host = "localhost", int $port = 3306): void {
    echo "Connected to database: " . $host . ":" . $port;
    echo "<br>";
}

echo "<br>";
echo "<br>";
connectionBD();



function sumAllItems($arr_1): void{
    $total = 0;
    foreach($arr_1 as $item){
        $total += $item;
    }
    echo $total;
    echo "<br>";
}

function sumAllItemsArray(int...$values): void {
    $total = 0;
    foreach($values as $item){
        $total += $item;
    }
    echo $total;
    echo "<br>";
}

echo "<br>";
echo "<br>";
sumAllItems([1,2,3,4,5]);
echo "<br>";
echo "<br>";

$arr_2 = [10,20,30,40];
sumAllItemsArray(1,2,3,4,5,6,7,8,9,10);
sumAllItemsArray(1,2);
sumAllItemsArray();
sumAllItemsArray(...$arr_2); //sumAllItemsArray (10,20,30,40)

echo "<br>";
echo "<br>";

function encontrarUsuario(?int $id) {
    if ($id === null) {
        return null;
    }
    return "Camilo";
}

$name = encontrarUsuario();
echo $name;

