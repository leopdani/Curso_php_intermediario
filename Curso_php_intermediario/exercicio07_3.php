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
   <form method="get" action="exercicio07_3.php">
   <fieldset><legend>Contador Personalizável</legend>
        <label for='cin'>Início:</label><input type='number' name='in' id='cin' min='0' max='100'/>
		
		<br/>
		
        <label for='cfi'>Final:</label><input type='number' name='fi' id='cfi' min='0' max='1000'/>
		
		<br/>

        Incremento:
        <select name='esc'>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            
        </select>
    </fieldset>
	<input type="submit" class="botao" value="Enviar"/>
    </form>
   <?php 
   $i = $_GET["in"];
   $f = $_GET["fi"];
   $e = $_GET["esc"];
   
   while($i <= $f && $e == 1){
	echo "$i";
 	$i = $i + 1;
   }
   while ($i <= $f && $e == 2) {
	echo "$i";
	$i = $i + 2;
   }
   
   while ($i <= $f && $e == 3) {
	echo "$i";
	$i = $i + 3;
   }
   
   while ($i <= $f && $e == 4) {
	echo "$i";
	$i= $i + 4;
   }
	
	?>                   
</form>


 </div>   
</body>
</html>