<?php

    /**
     * Ejercicio 6_3b
     */
    $countries = [
    'uk' => 'United Kingdom',
    'fr' => 'France',
    'pt' => 'Portugal',
    've' => 'Venezuela',
    'at' => 'Austria',
    'es' => 'Spain',
    'co' => 'Colombia'
    ];

    //------------------Punto 1
    $find = "Colombia";
    if (in_array($find, $countries)) {
        print "Mi pais de origen es " . $find . " y esta en la lista";
    } else {
        print "Mi pais de origen es " . $find . " pero no esta en la lista";
    }
    echo "<br><br>";

    //------------------Punto 2
    asort($countries);
    
    //------------------Punto 3
    print_r($countries); echo "<br><br>";

    //------------------Punto 4
    $string = implode(", ", $countries);
    echo $string;

    ?>