<?php

    //-----asiganacion clasica de un vector
    $vector[0] = 1;
    $vector[1] = 2;
    $vector[2] = 3;

    echo "Vector [0] = " . $vector[0] . "<br>";
    echo "Vector [1] = " . $vector[1] . "<br>";
    echo "Vector [2] = " . $vector[2] . "<br><br>";


    //--------- asignacion moderna
    $vector1 = [6, 7, 8, 9];
    $vector1 [] = 31;
    $vector1 [] = 22;

    echo "Vector1 [0] = " . $vector1[0] . "<br>";
    echo "Vector1 [1] = " . $vector1[1] . "<br>";
    echo "Vector1 [2] = " . $vector1[2] . "<br>";
    echo "Vector1 [3] = " . $vector1[3] . "<br>";
    echo "Vector1 [4] = " . $vector1[4] . "<br>";
    echo "Vector1 [5] = " . $vector1[5] . "<br><br>";


    //---------------suma del contenido del arreglo 

    $suma = $vector1[0] + $vector1[1] + $vector1[2] + $vector1[3] + $vector1[4] + $vector1[5];
    
    echo "La suma del contenido del vector1 es: " . $suma;
?>