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
   <form method="get" action="exercicio07_1.php">
   <?php 
	 	$i = 1; //1º while pega os dados da url
	 	while($i<=5){
	 		$v = "num".$i;
	 		$url = "v".$i;
	 		$$v = isset($_GET[$url])?$_GET[$url]:0;
	 		$i++;
	 	}
	 		/*echo "$num1 $num2 $num3 $num4 $num5"; //assim fica inline*/

	 	$i=1; //este bloco mostra os dados pegos pela url
	 	while($i<=5){
	 	$v = "num".$i;
	 	echo "Valor $i: ". $$v ."<br/>";
	 	$i++;
	  }
	?>                   
</form>


 </div>   
</body>
</html>