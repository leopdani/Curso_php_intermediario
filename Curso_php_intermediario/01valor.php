    <?php
        $valor = $_GET["v"] ;
        echo "o valor enviado foi $valor";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>curso de php</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
       
        echo "a raiz de $valor e igual a " . number_format($rq,2);
    ?>
    <a href="01exercicio.html">voltar</a>
</div>
</body>
</html>