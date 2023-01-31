<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $t = isset($_GET["esc"])?$_GET["esc"]:1;
        echo "<h1>A tabuada de $t é </h1>";
       
        $c = $t;
        $fat = 1;
        do{
            
            $resultado = $c * $fat ;
            $resultado1 = "$c * $fat = " ; 
            echo "$resultado1";
            echo "$resultado <br>";
            

            $fat++;

        }while($fat>=1 && $fat <= 10);
        
    ?> 
    <a href="exercicio08_1.html">Voltar</a>
 </div>   
</body>
</html>