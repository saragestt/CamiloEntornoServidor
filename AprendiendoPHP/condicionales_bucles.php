<?php

$edad = 20;
$nota = 9.1;


if ($edad >=18) {
    echo "Mayor de edad";
}
else {
    echo "Es menor de edad";
}

echo "<br>";

if ($nota >= 8){
    if ($nota > 9){
        echo "Matricula de Honor";
    }
    else{
        echo "Sobresaliente";
    }
}
elseif ($nota < 8 && $nota >= 7){
    echo "Notable";
}
elseif ($nota < 7 && $nota >=5){
    echo "Suficiente";
}
else{
    if ($nota <1){
        echo "Tienes que repetir";
    }
    else {
        echo "Suspenso";
    }
    
}

echo "<br>";
echo "<br>";


$arr_1 = array("uva", "banana", "mango", "mazana","pera");
$arr_2 = array("pepe", "laura", "juan", "Camilo","pedro");

for ($i=0; $i < count($arr_1); $i++){
    echo $arr_2[$i] . " le gustan las " . $arr_1[$i]. "<br>";
}

echo "<br>";

foreach ($arr_1 as $item){
    echo $item . "<br>";

}

echo "<br>";

foreach ($arr_1 as $item){
    echo $item . "<br>";

}

$cont = null;
for ($i=0;$i < count($arr_2); $i++){
    if($arr_2[$i] == "Camilo"){
        $cont = $i;
    }
}
echo $cont;

echo "<br>";
echo "<br>";
$arr_3 = array(
    "nombre" => "Camilo",
    "edad" => 27,
    "ciudad" => "Madrid",
    "colores" => ["rojo", "verde", "amarillo"],
    "animales" => array()
);

foreach ($arr_3 as $key => $value){
    if ($key != "colores" && $key != "animales"){
         echo " La clave es: ". $key . " y el valor es: " . $value .  "<br>";
    }
    /*else{
        foreach($variable as $item){
            echo $item . "<br>";
        }
        echo "<br>";
    }*/
   
} 

