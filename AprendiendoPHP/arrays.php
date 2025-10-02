<?php
 //Formas de hacer arrays. Los arrays son dinamicos.
   $arr_1 =["hola", 3.2, 10, true];
   $arr_2 =array("adios",6.1);
   $arr_4 = array("hola", "sara", "clase", "asignatura");
   
   echo $arr_1[0]; //Mostrar un elemento de un array por su posicion
   echo "<br>";
   array_push($arr_1, false, "uva", "mango"); //Añade elementos al final del array
   array_unshift($arr_1,"pera"); //Añade elementos al inicio de un array
   array_pop($arr_1); //Elimina el ultimo elemento  
   print_r($arr_1); //Imprime el array
   $arr_3 = array_merge($arr_1, $arr_2); //Juntar diferentes arrays
   echo "<br>";
   print_r($arr_3);
   echo "<br>";
   echo in_array("uva", $arr_3);//Comprueba si un valor se encuentra en un array. true/false
   echo json_encode(in_array("uva", $arr_3)); //Comprueba si un valor se encuentra en un array. true/false
   echo count($arr_3); //Cantidad de items o elementos que tiene un array
   echo "<br>";
   sort($arr_4); //Ordena los elementos de forma ascendente // a,b,c,d,...
   print_r($arr_4);

   echo "<br>";
   rsort($arr_4);//Ordena los elementos de forma descendente z,y,x, ....
   print_r($arr_4);

   $arr_5 = array(
    "nombre" => "sara",
    "edad" => 27,
    "esEstudiante" => json_encode(false) //El json_encode transforma el valor boolean 1-0 en true-false
   );
   echo "<br>";
   print_r($arr_5);
   echo "<br>";
   echo $arr_5["nombre"];

   echo "<br>";
   print_r(array_keys($arr_5)); // Muestra las claves de un array
   echo "<br>";
   print_r(array_values($arr_5)); // Muestra los valores de un array

   echo "<br>";
   print_r(json_encode(in_array("sara", $arr_5))); //Comprobar si un valor existe en un array
   echo "<br>";
   echo json_encode(array_key_exists("tieneCoche", $arr_5));

   
   if (array_key_exists("edad",$arr_5)){
    if ($arr_5["edad"] >= 18){
        echo "Puede conducir";
    }
    else {
        echo "no puede conducir";
    }
   }

?>