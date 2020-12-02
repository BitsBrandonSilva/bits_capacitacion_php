<?php

    /**
     * Ejercicio 6_10a
     */

$cadena = "1, 4, 7, 15, 222, 45, 68, 342";


echo preg_replace_callback(
    "/[0-9]{1,2}/", function ($coincidencia) { 
        if ($coincidencia[0] % 2 == 0) {
            echo $coincidencia[0] = $coincidencia[0] * 2 
            . " El numero base se multiplico por 2 <br>";
        } else {
            echo $coincidencia[0] = number_format(rand(1000, 10000), 2, '.', ',') 
            . " Sustituido, numero base impar <br>";
        }
    }, $cadena
);

echo "<br><br>";

echo "Cadena de texto original <br><br>";
print json_encode($cadena);

?>