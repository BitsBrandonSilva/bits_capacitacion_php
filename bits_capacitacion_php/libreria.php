<?php

    /**
     * Librerias
     */

    /**
     * Funcion incrementar contador
     * 
     * @return contador++
     */
function Incrementar_contador(&$contador, $valor_maximo = 5) 
{
    if ($contador < $valor_maximo) {
        $contador = $contador + 1;
        return true;
    } else {
        return false;
    }
}

?>