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
            function teste(&$x){
                $x +=2;
                
                echo "<p>o valor de x é $x </p>";
            
            }
           $a = 3;
           teste($a);
           echo "<p> o valor de a e $a</p>";
        ?> 





</div>
    
</body>
</html>