<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  //trim retira os espaços vazios antes da palavra  
        $nome="    Bruna Avella Verrone                 ";
        echo(strlen($nome));
        $novo = ltrim($nome);
        echo($novo);
        echo(strlen($novo));

    ?> 

    
</body>
</html>