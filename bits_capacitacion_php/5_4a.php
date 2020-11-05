<?php

    function calculadora ($num1, $num2, $operacion) {
        switch ($operacion) {
            case '+' :
                $resultado = $num1 + $num2;
                break;

            case '-' :
                $resultado = $num1 - $num2;
                break;

            case '*' :
                $resultado = $num1 * $num2;
                break;

            case '/' :
                $resultado = $num1 / $num2;
                break;

            case '%' :
                $resultado = $num1 % $num2;
                break;
            default:
                echo "No es una operacion aritmetica";
        }

        return $resultado;
    }
?>