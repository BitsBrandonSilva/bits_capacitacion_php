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

    //--------------------------SUMA
    $num1 = 80;
    $num2 = 22;
    $operacion = "+";
    echo "El resultado de la Suma de $num1 + $num2 es : " . calculadora($num1, $num2, $operacion) . "<br><br>";

    //-----------------------RESTA
    $num1 = 40;
    $num2 = 22;
    $operacion = "-";
    echo "El resultado de la Resta de $num1 - $num2 es : " . calculadora($num1, $num2, $operacion) . "<br><br>";

    //-----------------------MULTIPLICACION
    $num1 = 9;
    $num2 = 9;
    $operacion = "*";
    echo "El resultado de la Multiplicacion de $num1 * $num2 es : " . calculadora($num1, $num2, $operacion) . "<br><br>";

    //---------------------Division
    $num1 = 50;
    $num2 = 2;
    $operacion = "/";
    echo "El resultado de la Division de $num1 / $num2 es : " . calculadora($num1, $num2, $operacion) . "<br><br>";

    //----------------------MOD
    $num1 = 31;
    $num2 = 18;
    $operacion = "%";
    echo "El Resto de  $num1 % $num2 es : " . calculadora($num1, $num2, $operacion) . "<br><br>";
?>