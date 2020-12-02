<?php

    /**
     * Clausula Continue
     */
    echo "Se salta los numeros pares a causa de la clausula continue <br>";
for ($i = 0; $i < 10; $i++ ) {
    if ($i % 2 == 0) {
        continue;
    }
    print "$i <br>";
}
echo "<br>";

    echo "Se salta los numeros multiplos de 3 <br>";
for ($i = 0; $i < 10; $i++ ) {
    if ($i % 3 == 0) {
        continue;
    }
    print "$i <br>";
}
?>