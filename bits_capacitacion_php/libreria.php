<?php

    function incrementar_contador(&$contador, $valor_maximo = 5) {
        if ($contador < $valor_maximo) {
            $contador = $contador + 1;
            return true;
        } else {
            return false;
        }
    }

?>