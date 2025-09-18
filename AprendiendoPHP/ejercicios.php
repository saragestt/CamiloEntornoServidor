<?php

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






