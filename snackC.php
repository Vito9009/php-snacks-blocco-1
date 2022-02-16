<!--
    Creare un array con 15 numeri casuali, tenendo conto che l’array 
    non dovrà contenere lo stesso numero più di una volta
-->

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
        $numeriCasualiArray = [];

        while(count($numeriCasualiArray) < 15){
            $numeriCasuali = rand(0, 1000);
            if (!in_array($numeriCasuali, $numeriCasualiArray)){
                $numeriCasualiArray[] = $numeriCasuali . '<br>';
            }
        }

        for ($i = 0; $i < count($numeriCasualiArray); $i++){
            echo $numeriCasualiArray[$i] . "<br>";
        }

        // echo $numeriCasualiArray[] .= $numeriCasuali . '<br>'; (utilizzato nel while al possto della riga 21 e senza ciclo for)
    ?>
</body>
</html>