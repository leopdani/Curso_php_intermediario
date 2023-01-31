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
            $estado = $_GET["estado"];
            echo "<p>Você mora na ";
            switch ($estado){
                case "AM":
                case "RR":
                case "AP":
                case "PA":
                case "TO":
                case "RO":
                case "AC":
                    echo "<span class='foco'>Região Norte</span>";
                    break;
                case "MA":
                case "PI":
                case "CE":
                case "RN":
                case "PE":
                case "PB":
                case "SE":
                case "AL":
                case "BA":
                    echo "<span class='foco'>Região Nordeste</span>";
                    break;
                case "DF":
                case "MT":
                case "MS":
                case "GO":
                    echo "<span class='foco'>Região Centro-Oeste</span>";
                    break;
                case "SP":
                case "RJ":
                case "ES":
                case "MG":
                    echo "<span class='foco'>Região Sudeste</span>";
                    break;
                case "PR":
                case "RS":
                case "SC":
                    echo "<span class='foco'>Região Sul</span>";
            }
            echo ".</p>";
        ?>
        <P><a class="butao" href="javascript:history.go(-1)">Voltar</a></P>
</div>
    
</body>
</html>