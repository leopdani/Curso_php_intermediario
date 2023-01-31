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
            return $s;
        }

        $x = 9;
        $y = 15;
        $z = 21;
        $r = soma($x, $y, $z);
        echo "a soma entre $x e $y e $z e igual a $r";
        ?> 


</div>
    
</body>
</html>