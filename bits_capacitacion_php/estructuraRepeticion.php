<?php

    /**
     * Estructura de repeticion
     */
    echo "Bucle for con longitud fija: <br><br>";
for ($i = 0; $i<10; $i++) {
    echo $i . "<br>";
}
    echo "<br>";

    echo "Bucle for que su limite varia segun la longitud de un array: <br><br>";
    $vector = [5, 10, 22, 31, 40];

    $suma_total = 0;

for ($i = 0; $i < $vector; $i++) {
    echo $vector[$i] . "<br>";
}
    echo "<br>";

for ($i = 0; $i < $vector; $i++) {
    $suma_total = $suma_total + $vector[$i];
}

    echo "Suma del contenido del array: <br>";
    echo $suma_total;

?>