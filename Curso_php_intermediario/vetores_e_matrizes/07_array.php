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
    <pre>
        <?php
            $v = array(array(6,4),
                       array(4,9),
                       array(3,2),
                       array(1,2));

            
            $v[0][1] = $v [2][0];
            print_r($v)
            
        ?>
    </pre>


</div>
    
</body>
</html>

