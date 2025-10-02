<?php

$persona = array(
    "name" => "Jhon Dee",
    "isLogged" => true,
    "hour" => 10
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #container {
            width: 90%;
            max-width: 600px;
            margin: 50px auto 20px;
        }

        #container:not(button){
            border-radius: 10px;
            box-shadow: 0 2px 3px rgba(0,0,0,0.4);
        }

        .content{
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        button[type="button"]{
            all: unset;
            padding: 8px 15px;
            border: none;
            outline: none;
            background-color: #1e8000;
            box-shadow: 0 2px 3px rgba(0,0,0,0.4);
            border-radius: 10px;
            margin: 5px;
            color: #FFF;
            font-size: x-large;
        }

    </style>

</head>
<body>
    <div id="container">
        <?php

        if ($persona["isLogged"]){
        ?>
           <div>
            <h1><?php echo "Hola, " . $persona["name"]; ?></h1>
            <p>
                <?php
                if($persona["hour"] > 6 && $persona["hour"] < 12 ){
                    echo "Buenos dias";
                }
                elseif ($persona["hour"] >= 12 && $persona["hour" < 20]){
                    echo "Buenas tardes";
                }
                else{
                    echo "Buenas noches";
                }
                ?>
            </p>
            </div>
        <?php
        }else{
        ?>
        <div>
            <button type="button">Iniciar sesion</button>
        </div>
        <?php
        }
        ?>
    </div>
        


    
</body>
</html>