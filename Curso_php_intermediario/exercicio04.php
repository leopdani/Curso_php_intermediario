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
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;

        switch($o){
            case 1:    
                $r = $n * 2;
                break;
            case 2:
                $r = pow($n,3);
                break;
            case 3:
                $r = sqrt($n);
        }
        echo "o resultado da operação solicitada foi
        <span class='foco'>$r</span>";
       
    ?>
   <a href="exercicio04.html">Voltar</a>

</div>
    
</body>
</html>