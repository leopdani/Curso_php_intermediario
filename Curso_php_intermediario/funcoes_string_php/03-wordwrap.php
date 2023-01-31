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
        
        $t = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati velit, explicabo officia hic ratione, sunt id corporis cumque voluptatem earum, magni esse. Modi sapiente deleniti architecto qui tempora accusamus corrupti";
        $r = wordwrap($t, 5, "<br/>\n", false); 
        echo $r;

    ?> 
</div>
</body>
</html>