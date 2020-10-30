<?php

    //---------- Arreglo multidimensional con indices asociativos 
    $peliculas = [
        [
            "identificador" => 1,
            "titulo" => "Back To The Future",
            "director" => "Robert Zemeckis",
            "año" => 1985,
            "duracion" => "5h 41m"
        ],

        [
            "identificador" => 2,
            "titulo" => "Timecop: policía del futuro",
            "director" => "Peter Hyams",
            "año" => 1994,
            "duracion" => "1h 39m"
        ],

        [
            "identificador" => 3,
            "titulo" => "The Crow",
            "director" => "Alex Proyas",
            "año" => 1994,
            "duracion" => "1h 42m"
        ],

        [
            "identificador" => 4,
            "titulo" => "Universal Soldier",
            "director" => "Roland Emmerich",
            "año" => 1992,
            "duracion" => "1h 43m"
        ]
    ];

    //$numero_peliculas = sizeof($peliculas);

    //-----------------Estructura de repeticion que cuenta las peliculas
    $cont = 0;
    foreach($peliculas as $movie) {
        $cont = $cont + 1;
    }
    echo "El numero de peliculas existentes es: " . $cont . "<br><br>";

    echo "Las peliculas son: <br><br>";

    //--------------------Estructura de repeticion que muestra las peliculas
    foreach($peliculas as $movie) {
        echo $movie["titulo"] . "<br>";
    }
?>