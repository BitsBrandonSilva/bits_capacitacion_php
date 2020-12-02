<?php

    /**
     * Ejercicio 6_3a
     */
    $numbers = [3, 45, 22, 12, 33, 23, 44, 1, 121];
    $cadena = "5:76:7:8";
    $longitud = count($numbers);
    $cont1 = 0;
    $cont2 = 0;

    //------------------- Punto 1
    echo "Numero de elementos en el array : " . count($numbers) . "<br><br>";

    //--------------Punto 2
for ($i = 0; $i < $longitud; $i++) {
    if ($numbers[$i] % 2 == 0) {
        $cont1 ++;
        echo "El numero es par: ". $numbers[$i] . "<br>";
    } else {
        $cont2++;
        echo "El numero es impar: ". $numbers[$i] . "<br>";
    };
};

    echo "Hay " . $cont1 . " pares <br>";
    echo "Hay " . $cont2 . " impares <br><br>";

    //--------------Punto 3
    sort($numbers);

    //--------------Punto 4
    $morenumbers = explode(":", $cadena);
    
    //--------------Punto 5
    $numbers = array_merge($numbers, $morenumbers);

    //--------------Punto 6
    rsort($numbers);
    
    //--------------Punto 7
    print_r($numbers);
    
?>