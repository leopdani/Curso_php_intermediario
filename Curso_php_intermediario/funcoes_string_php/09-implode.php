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
        $vetor[0] = "curso";
        $vetor[1] = "em";
        $vetor[2] = "video";
        $texto = implode("#", $vetor);
        print($texto);

    ?> 

</div>
    
</body>
</html>