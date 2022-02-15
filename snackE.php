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
                6,
                5,
                8,
                8,
                7
                ]
        ],
        [
            "nome" => "Giuseppe",
            "cognome" => "Verdi",
            "voti" => [
                9,
                7,
                3,
                6,
                4
                ]
        ],
        [
            "nome" => "Annalisa",
            "cognome" => "Bianchi",
            "voti" => [
                9,
                8,
                8,
                7,
                9
                ]
        ],
        [
            "nome" => "Antonio ",
            "cognome" => "Rossi",
            "voti" => [
                8,
                5,
                7,
                6,
                6
                ]
        ]
    ];

    for ($i = 0; $i < count($studenti); $i++){
        $sommaVoti = 0;
        for ($num = 0; $num < count($studenti[$i]["voti"]); $num++){
            $sommaVoti += $studenti[$i]["voti"][$num];
        }

        $votoMedio = $sommaVoti/count($studenti[$i]["voti"]);

        echo "<ul>" . "<li>" . $studenti[$i]["nome"] . " " . $studenti[$i]["cognome"] . ":" . " " . $votoMedio . "</li>" . "</ul>";
    }
?>