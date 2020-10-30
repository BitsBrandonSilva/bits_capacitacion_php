<?php

    $a = 10;
    $b = 22;
    $c = 31;

    //------------ Sino cumple no entra en la condicion, no muestra nada
    echo "Condicion IF <br>";
    if ($a < $b) {
        echo "$a es menor que $b <br><br>";
    }

    //--------------- Sino se cumple una de las condiciones entra en la otra
    echo "Condicion IF/ELSE <br>";
    if ($b > $a) {
        echo "$b es mayor que $a <br><br>";
    }else {
        echo "$b es menor que $a <br><br>";
    }

    //-------------------if/elseif/else
    echo "Condicion IF/ELSEIF/ELSE <br>";
    if ($c > $b) {
        echo "$c es mayor que $b <br>";
    }elseif ($c == $b) {
        echo "$c es igual a $b <br>";
    }else {
        echo "$b es mayor que $c <br>";
    }

?>