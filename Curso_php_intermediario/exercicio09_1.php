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
    
    <form method="get" action="exercicio09_1_1.php">
        <select name="num" min="0" max="10">
            <?php
                for($c=1; $c<=10; $c++)
                    echo "<option>$c</option>";
            ?> 
        </select>
        <input type="submit" value="Tabuada"/>
    </form>
            
   
    
</div>
</body>
</html>