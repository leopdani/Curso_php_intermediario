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
        function soma ($a, $b, $c){
            $s = $a + $b +$c;
            echo "<p>a soma vale $s</p>";
        }
        soma(3,4,3);
        soma(1,2,3);

        $x = 9;
        $y = 15;
        $z = 21;
        soma($x, $y, $z);

    ?> 




</div>
    
</body>
</html>