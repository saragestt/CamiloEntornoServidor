<?php
//Bucles 
/*array CLAVE-VALOR que se llame productos. Este elemento tendrá dentro arrays. Cada array interno tendrá una
estructura id, name, price, stock, category. Que sean 5 elementos. Luego crear otro array llamado carrito.
Este array tendrá otros arrays internos. Cada array interno tendrá lo siguiente:

$cart = array(
   ['product_id' => 1, 'qty' => 2],
   ['product_id' => 2, 'qty' => 5],
   ['product_id' => 3, 'qty' => 1],
);

1- listar el contenido de productos.
2- listar productos sin stock.
3- listar solo los productos (info de productos) que estén añadidos en el carrito
（cart）・
4- Listar el nombre y el precio total a
pagar de los productos que estén en el carrito.*/


$productos = array(
   ["id" => 1, "name" => "Botella","price"=>2, "Stock" => 40, "Category" => "Hogar"],
   ["id" => 2, "name" => "Juguete","price"=>45, "Stock" => 50, "Category" => "Infantil"],
   ["id" => 3, "name" => "Portatil","price"=>700, "Stock" => 10, "Category" => "Tecnologia"],
   ["id" => 4, "name" => "Camara", "price"=>600,"Stock" => 0, "Category" => "Fotografia"],
   ["id" => 5, "name" => "Manta","price"=>10, "Stock" => 30, "Category" => "Hogar"],
);

foreach($productos as $producto){
   foreach($producto as $key => $value){
      echo " ". $key . "  " . $value;
   }
   echo "<br>";
}


$cart = array(
   ['product_id' => 1, 'qty' => 2],
   ['product_id' => 2, 'qty' => 5],
   ['product_id' => 3, 'qty' => 1],
);

foreach($productos as $producto){
   if ($producto["Stock"] <= 0){
      print_r($producto["name"]);
      echo " Sin stock";
   }
   echo "<br>";
}


foreach($productos as $producto){
   foreach( $cart as $carrito){
      if ($producto["id"] == $carrito["product_id"]){
      print_r($producto["name"]);
      echo " añadidx al carrito";
      echo "<br>";
      }
   }
}

echo "<br>";

$cont = 0;
foreach($productos as $producto){
   foreach($cart as $carrito){
      if ($producto["id"]== $carrito["product_id"]){
         print_r($producto["name"] . " " . $producto["price"]);
         $cont = $cont + $producto["price"];
         echo "<br>";
      }
   }
}
echo " Precio total: " . $cont;
echo "<br>";

/* Tenemos un array llamado $users o $ usuarios. Este array es
 bidimensional. La estructura de los arrays internos tienen 
 username, password, role (ADMIN O USER), isActive(true o false).

 Cuando pongais el isActive ponedlo como json_encode (true o false).

 Cread una variable array, que tendra username, y un password. 

 - Comprobar si el usuario existe en numestra bbdd($users) Si no
   existe al final de toda la comprobación habra que poner un 
   mensaje que diga "Usuario no existe".
- Si existe, y la contraseña es incorrecta, poned "Contraseña 
  incorrecta".
- Si todo coincide, poned "Bienvenido [USERNAME] Rol[ROL]". 
- Luego crear un array unidimensional, cuya posicion 0 sea 
  "Acceso total", la 
  posicion 1 será "Acceso limitado". */

  echo "<br>";

  $users = array(
    ["username" => "lolo27", "password" => "Lol123", "rol" => "user", "isActive" => json_encode(true)],
    ["username" => "bottle30", "password" => "ADM456", "rol" => "admin", "isActive" => json_encode(false)],
    ["username" => "lolIPOP15", "password" => "pop789", "rol" => "user", "isActive" => json_encode(true)],
  );

foreach ($users as $usuario){
  print_r($usuario);
  echo"<br>";
};

  echo"<br>";

foreach ($users as $usuario){
    if(in_array("username",$users)){
        if ($users["username"] == "lolo27"){
            echo "El usuario existe"; 
        }
        else{
            echo "Contraseña incorrecta";
        }
    }
};
 
