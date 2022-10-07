<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $universo = "marvel";
        $repeticoes = 4;

        if($universo == "dc"){
            $herois = ["batman", "flash", "greenlantern", "superman", "wolverine"];
        } else if($universo == "marvel"){
            $herois = ["capitaoamerica", "demolidor", "hulk", "ironman", "thor"];
        } else{
            echo "Universo invalido.";
        }

        for($i=0;$i<$repeticoes;$i++){
            echo "<img src='img/".$universo."/".$herois[1].".jpg'>";
        }

    
    ?>
</body>
</html>