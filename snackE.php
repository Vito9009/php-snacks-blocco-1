<!--
    Creare un array contenente qualche alunno di un’ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php
    $studenti = [
        [
            "nome" => "Alessia",
            "cognome" => "Zang",
            "voti" => [
                "storia" => 6,
                "lettere" => 5,
                "matematica" => 8,
                "educazione fisica" => 8,
                "diritto" => 7
                ]
        ],
        [
            "nome" => "Giuseppe",
            "cognome" => "Verdi",
            "voti" => [
                "storia" => 9,
                "lettere" => 7,
                "matematica" => 3,
                "educazione fisica" => 6,
                "diritto" => 4
                ]
        ],
        [
            "nome" => "Annalisa",
            "cognome" => "Bianchi",
            "voti" => [
                "storia" => 9,
                "lettere" => 8,
                "matematica" => 8,
                "educazione fisica" => 7,
                "diritto" => 9
                ]
        ],
        [
            "nome" => "Antonio ",
            "cognome" => "Rossi",
            "voti" => [
                "storia" => 8,
                "lettere" => 5,
                "matematica" => 7,
                "educazione fisica" => 6,
                "diritto" => 6
                ]
        ]
    ];

    for ($i = 0; $i < count($studenti); $i++){
        
        $votoMedio = array_sum($studenti[$i]["voti"]) / count($studenti[$i]["voti"]);

        echo "<ul>" . "<li>" . $studenti[$i]["nome"] . " " . $studenti[$i]["cognome"] . ":" . " " . $votoMedio . "</li>" . "</ul>";
    }
?>