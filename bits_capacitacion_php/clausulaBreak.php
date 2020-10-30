<?php

    $vector = [22, 31, 40, 98];

    $encontrado = FALSE;

    $buscar = 98;
    //$buscar = 15;

    for ($i = 0; $i< count($vector); $i++) {
        if ($vector[$i] == $buscar) {
            $encontrado = TRUE;
            break;
        }
    }

    if ($encontrado) {
        echo "Se ha encontrado el valor $buscar en la posicion $i";
    } else {
        echo "No se ha encontrado el valor $buscar";
    }
?>