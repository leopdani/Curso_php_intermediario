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
   $valor = isset($_GET["np"])?$_GET["np"]:0;
   $contador = 0;
   //Verifica se o número é divisível pelos valores assumidos por $i, caso seja soma no contador, cria uma variável indexada pelo contador e armazena esse divisor nela:
   for ($i=1; $i <= $valor; $i++) { 
    if (($valor % $i) == 0) {
     $contador += 1;
     $gerador = "v$contador";
     $$gerador = $i;
    }
   }
   echo "<h2>Analisando o número $valor</h2>";
   echo "Valores múltiplos: ";
   //Percorre as variáveis com os valores divisores armazenados e os exibe:
   for ($i=1; $i <= $contador; $i++) {
    $gerador = "v$i";
    echo $$gerador. " ";
   }
   echo "<br>";
   echo "Total de múltiplos: $contador<br>";
   //Checa de o número possui mais de dois divisores e informa se é primo
   if ($contador > 2) {
    echo "Resultado: $valor NÃO É PRIMO!";
   }
   else{
    echo "Resultado: $valor É PRIMO!";
   }
   echo "<br>";
   ?>
     <a href="exercicio10.php">Voltar</a>    
            
   
    
</div>
</body>
</html>