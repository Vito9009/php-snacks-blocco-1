<!--
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di 
    casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

    Olimpia Milano - Cantù | 55-60
-->

<?php
    $primaGiornataCampionatoBasket = [
        [
            "squadraCasa" => "Napoli",
            "squadraOspite" => "Olimpia Milano",
            "punteggioSquadraCasa" => "63",
            "punteggioSquadraOspite" => "73",
        ],
        [
            "squadraCasa" => "Trieste",
            "squadraOspite" => "Brindisi",
            "punteggioSquadraCasa" => "84",
            "punteggioSquadraOspite" => "82",
        ],
        [
            "squadraCasa" => "Varese",
            "squadraOspite" => "Brescia",
            "punteggioSquadraCasa" => "75",
            "punteggioSquadraOspite" => "72",
        ],
        [
            "squadraCasa" => "Dinamo Sassari",
            "squadraOspite" => "VL Pesaro",
            "punteggioSquadraCasa" => "75",
            "punteggioSquadraOspite" => "73",
        ],
        [
            "squadraCasa" => "Fortitudo Bologna",
            "squadraOspite" => "Reggiana",
            "punteggioSquadraCasa" => "80",
            "punteggioSquadraOspite" => "81",
        ],
        [
            "squadraCasa" => "Derthona",
            "squadraOspite" => "Universo Treviso",
            "punteggioSquadraCasa" => "77",
            "punteggioSquadraOspite" => "92",
        ],
        [
            "squadraCasa" => "Venezia",
            "squadraOspite" => "Cremona",
            "punteggioSquadraCasa" => "88",
            "punteggioSquadraOspite" => "71",
        ],
        [
            "squadraCasa" => "Trento",
            "squadraOspite" => "Virtus Bologna",
            "punteggioSquadraCasa" => "88",
            "punteggioSquadraOspite" => "102",
        ]
    ];

    $output = '';

    for($i = 0; $i < count($primaGiornataCampionatoBasket);$i++){
        $output .= $primaGiornataCampionatoBasket[$i][squadraCasa] . ' - ' . $primaGiornataCampionatoBasket[$i][squadraOspite] . ' | ' . $primaGiornataCampionatoBasket[$i][punteggioSquadraCasa] . ' - ' . $primaGiornataCampionatoBasket[$i][punteggioSquadraOspite] . '<br>';
    }

    echo $output;

?>