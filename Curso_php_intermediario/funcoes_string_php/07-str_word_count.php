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
<?php  //trim retira os espaços vazios depois da palavra  
        $frase = "eu vou estudar php agora buu";
        $cont = str_word_count($frase, 0);
        echo $cont;
        
        $cont = str_word_count($frase, 1);
        print_r($cont);

        
        $cont = str_word_count($frase, 2);
        print_r($cont);

    ?> 

</div>
    
</body>
</html>