<?php

    /**
     * Arreglo multidimensional con indices asociativos
     */  
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

    //-----------------Estructura Ciclo Foreach que cuenta las peliculas
    $cont = 0;
    foreach ($peliculas as $movie) {
        $cont = $cont + 1;
    }

    echo "Cantidad de peliculas con Ciclo Foreach: " . $cont . "<br><br>";

    $longitud = count($peliculas);

    //--------------------------Estructura Ciclo While
    $i = 0;
    while ($i < $longitud) {
        $i++;
    }

    echo "Cantidad de peliculas con Ciclo While: $i <br><br>";

    //-------------------Estructura Ciclo DoWhile

    $p=0;
    do {
        $p++;
    } while ($p < $longitud);
    
    echo "Cantidad de peliculas con Ciclo DoWhile: $p <br><br>";

    //-------------------Estructura Ciclo For

    $cont2 = 0;
    for ($i = 0; $i < $longitud; $i++) {
        $cont2++;
    }

    echo "Cantidad de peliculas con Ciclo For: $cont2 <br><br>";

    //--------------------Estructura de repeticion que muestra las peliculas
    echo "Las peliculas son: <br><br>";
    foreach ($peliculas as $movie) {
        echo $movie["titulo"] . "<br>";
    }
    ?>