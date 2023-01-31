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
        $n1 = isset($_GET["ano"])?$_GET["ano"]:0;
        $n2 = isset($_GET["ano2"])?$_GET["ano2"]:0;

        $nt = (($n1 + $n2) /2);
        echo "O calculo da sua média $n1 e $n2 é: $nt";
        
        if($nt < 6){
            $tipoNota = "Reprovado";
        }
        elseif($nt >= 6 && $nt <= 10){
                $tipoNota = "Aprovado";
            }
        
       echo "Para essa nota, $tipoNota";
       
    ?>
   <a href="exercicio03.html">Voltar</a>

</div>
    
</body>
</html>