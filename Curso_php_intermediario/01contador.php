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
        $c = 10;
        do{
            echo "$c ";
           $c--;

        }while($c>=1);
        
    ?>
    <br>
    <?php
        $c = 1;
        do{
            echo "$c ";
           $c++;

        }while($c<=10);
    ?>

 </div>   
</body>
</html>