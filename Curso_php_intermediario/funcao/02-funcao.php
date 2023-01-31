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
    include "funcoes.php";        
    echo "<h1> Testando novas funcoes </h1>";
    ola();
    mostraValor(4);
    echo "<h2>Finalizando Programa</h2>";
?> 

<?php  
    include_once "funcoes.php";        
    echo "<h1> Testando novas funcoes </h1>";
    ola2();
    mostraValor2(4);
    echo "<h2>Finalizando Programa</h2>";
?> 


</div>
    
</body>
</html>