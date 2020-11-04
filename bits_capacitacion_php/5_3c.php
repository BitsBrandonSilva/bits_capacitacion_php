<?php

    $cadena1 = "abcdefg";

    $cadena2 = "abc";

    $cadena3 = "abcdefg";

    $cadena4 = "abcwoejrusnd";

    $cadena5 = "abcdefg";

    $cadena6 = "abcwoej";

    //---------------------------------- Comparacion 1
    echo "Comparacion 1 <br>";

    echo "Cadena1 = abcdefg <br>";
    echo "Cadena2 = abc <br><br>";

    //---------------------------------- Comparacion 2
    echo "Comparacion 2 <br>";

    echo "Cadena3 = abcdefg <br>";
    echo "Cadena4 = abcwoejrusnd <br><br>";

    //---------------------------------- Comparacion 3
    echo "Comparacion 3 <br>";

    echo "Cadena5 = abcdefg <br>";
    echo "Cadena6 = abcwoej <br><br>";

    if (strlen($cadena1) > strlen($cadena2)) {
        echo "La cadena 1 es mayor que la cadena 2 por: " . strlen($cadena1). " caracteres <br><br>";
        if (strlen($cadena3) < strlen($cadena4)) {
            echo "La cadena 3 es menor que la cadena 4 por: " . strlen($cadena3) . " caracteres <br><br>";
            if (strlen($cadena5) == strlen($cadena6)) {
                echo "Las cadenas 5 y 6 son iguales, tienen " . strlen($cadena6) . " caracteres";
            }
        }
    }    
?>