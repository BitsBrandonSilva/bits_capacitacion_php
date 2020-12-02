<?php

    /**
     * Asignacion elemento a elemento
     */
    $prefijo ["Alemania"] = 49;
    $prefijo ["Argentina"] = 54;
    $prefijo ["Colombia"] = 57;
    $prefijo ["España"] = 34;
    $prefijo ["Mexico"] = 52;


    //-------------- Asignacion clasica corta 

    $prefijo = array (
        "Alemania" => 49,
        "Argentina" => 54,
        "Colombia" => 57,
        "España" => 34,
        "Mexico" => 52
    );

    //-------------- Asignacion formato nuevo

    $prefijo = [
        "Alemania" => 49,
        "Argentina" => 54,
        "Colombia" => 57,
        "España" => 34,
        "Mexico" => 52
    ];

    echo "El prefijo para llamar a Alemania es " . $prefijo["Alemania"] . "<br>";
    echo "El prefijo para llamar a Colombia es " . $prefijo["Colombia"] . "<br>";
    
    ?>