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
    <form method="get" action="exercicio10_1.php">        Numero Escolhido: <input type="number" name="np" min="1" max="100" required=""/> 
    
    <?php
        for($np=1; $np<=10; $np++)
        

    ?>
        
        <input type="submit" value="Primo"/>
    </form>
            
   
    
</div>
</body>
</html>