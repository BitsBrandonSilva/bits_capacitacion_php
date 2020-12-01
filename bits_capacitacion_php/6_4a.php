<?php

    /**
     * Punto 2 y 3
     */
    $dates = [
        ['day' => 3, 'month' => 12, 'year' => 2005, 
        'timestamp' => mktime(0, 0, 0, 12, 03, 2005)],

        ['day' => 30, 'month' => 2, 'year' => 2017, 'timestamp' => 'Error'],

        ['day' => 7, 'month' => 9, 'year' => 2019, 
        'timestamp' => mktime(0, 0, 0, 9, 07, 2019)],

        ['day' => 1, 'month' => 11, 'year' => 2014, 
        'timestamp' => mktime(0, 0, 0, 11, 01, 2014)],

        ['day' => date("d"), 'month' => date("m"), 'year' => date("Y"), 
        'timestamp' => time()]
    ];

        /**
         * Punto 1
         */
    foreach ($dates as $fechas) {
        if (!checkdate($fechas['month'], $fechas['day'], $fechas['year'])) {
            unset($fechas['month'], $fechas['day'], $fechas['year']);
        }
    };

        /**
         * Punto 4
         */
    print_r($dates);

    ?>