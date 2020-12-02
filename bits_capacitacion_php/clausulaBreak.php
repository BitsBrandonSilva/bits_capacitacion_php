<?php

    /**
     * Clausula break
     */
    $vector = [22, 31, 40, 98];

    $encontrado = false;

    $buscar = 98;

for ($i = 0; $i< count($vector); $i++) {
    if ($vector[$i] == $buscar) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "Se ha encontrado el valor $buscar en la posicion $i";
} else {
    echo "No se ha encontrado el valor $buscar";
}
?>