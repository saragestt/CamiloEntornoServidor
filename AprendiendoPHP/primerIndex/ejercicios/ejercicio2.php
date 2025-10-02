<?php

/*


*/


$productos = array(
    ["id" =>1, "nombre" => "Mac" , "precio" => 266, "stock" => 10 ],
    ["id" =>2, "nombre" => "Tv" , "precio" => 500, "stock" => 3 ],
    ["id" =>3, "nombre" => "Silla" , "precio" => 89, "stock" => 0 ],
    ["id" =>4, "nombre" => "Pizarra" , "precio" => 30, "stock" => 1 ],
);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            box-sizing: border-box;
        }

        body,html{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #container{
            width: 75%;
            max-width: 350px;
            height: 100dvh;
            margin: 0 0 0 auto;
        }

        #content{
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: #ff6055e6; 
        }

        .item {
            width: 90%;
            margin: 0 auto 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            row-gap: 10px;
            background-color:#b80707;
            border-radius: 10px;
            padding: 10px 20px;

        }

        .title-item{
            width: 100%;
            display:flex;
            flex-flow: row nowrap;
            align-items: center;
            justify-content: space-around;
        }

        .item p {
            margin: 0;
            color: #FFF;
        }

        .item span {
            display: block;
            background-color: #FFF;
        }

    </style>


</head>
<body>
    <div id="container">
        <div id="content">
            <?php
            foreach ($productos as $producto){

            
            ?>

            <div class="item">
                <div class="title-item">
                    <p>ID: <?php echo $producto["id"]; ?></p>
                    <p><?php echo $producto["nombre"]; ?></p>
                    <?php
                    if ($producto["stock"] === 0){
                        echo '<span> Sin stock </span>';
                    }
                    else if ($producto["stock"] >= 100) {
                        echo "<span> Premium </span>";
                    }
                    ?>
                </div>
                <p>
                    <?php echo $producto["precio"]; ?> €
                </p>
            </div>
                <?php
                }
                ?>
        </div>
    </div>

    
</body>
</html>
