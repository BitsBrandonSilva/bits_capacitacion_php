<?php

    /**
     * Estructura bucle While
     */
    $vector = [40, 31, 22, 10, 5];

    $suma_total = 0;

    $v = 0;

    //----------------- bucle while que muestra el vector
while ($v < count($vector)) {
    echo $vector[$v] . "<br>";
    $v++;
}
    echo "<br>";
    $i = 0;

    //--------------------- bucle while que cuenta y suma el vector
while ($i < count($vector)) {
    $suma_total = $suma_total + $vector[$i];
    $i++;
}

    echo "La suma total del vector es: " . $suma_total;
?>