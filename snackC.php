<!--
    Creare un array con 15 numeri casuali, tenendo conto che l’array 
    non dovrà contenere lo stesso numero più di una volta
-->

<?php
    $numeriCasualiArray = [];

    while(count($numeriCasualiArray) < 15){
        $numeriCasuali = rand(0, 1000);
        if (!in_array($numeriCasuali, $numeriCasualiArray)){
            echo $numeriCasualiArray[] .= $numeriCasuali . '<br>';
        }
    }
?>