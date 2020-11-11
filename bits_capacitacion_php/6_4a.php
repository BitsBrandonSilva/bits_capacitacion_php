<?php

    //-----------------------------Punto 2 y 3
    $dates = [
        ['day' => 3, 'month' => 12, 'year' => 2005, 'timestamp' => 1133654400],
        ['day' => 30, 'month' => 2, 'year' => 2017, 'timestamp' => 1234566000],
        ['day' => 7, 'month' => 9, 'year' => 2019, 'timestamp' => 1567900800],
        ['day' => 1, 'month' => 11, 'year' => 2014, 'timestamp' => 1414886400],
        ['day' => date("d"), 'month' => date("m"), 'year' => date("Y"), 'timestamp' => time()]
    ];

    //-----------------------------Punto 1
    foreach ($dates as $fechas) {
        if (checkdate($fechas['month'], $fechas['day'], $fechas['year'])) {
            echo "Fecha valida: " . $fechas['month'] . " - " . $fechas['day'] . " - " . $fechas['year'] . " - " . $fechas['timestamp'] . "<br>";
        }else {
            unset($fechas['month'], $fechas['day'], $fechas['year'], $fechas['timestamp']);
            echo "Se elimino la fecha incorrecta <br>";
            var_export($fechas); echo "<br>"; //--------- var_export para valdiar que si se elimino
        };
    };

    echo "<br><br>";

    //-----------------------------Punto 4
    for ($i = 0; $i < count($dates); $i++) {
       print_r($dates[$i]);
       echo "<br>";
    }
    
?>