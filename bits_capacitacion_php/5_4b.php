<?php

    /**
     * Ejercicio 5_4b
     */

    require '5_4a.php';

   $numeros = [
      10 => [
            "numero" => rand(1, 900)
      ],

      20 => [
            "numero" => rand(1, 900)
      ],

      30 => [
          "suma" => '+',
          "resta" => '-',
          "multiplicacion" => '*',
          "division" => '/',
          "resto" => '%' 
      ]
   ];
   
   while ($numeros) {
       echo "Suma: " . calculadora(
        $numeros[10]["numero"], $numeros[20]["numero"], 
        $numeros[30]["suma"]) . "<br>";

       echo "Resta: " . calculadora($numeros[10]["numero"], 
       $numeros[20]["numero"], $numeros[30]["resta"]) . "<br>";

       echo "Multiplicacion: " . calculadora($numeros[10]["numero"], 
       $numeros[20]["numero"], $numeros[30]["multiplicacion"]) . "<br>";

       echo "Division: " . calculadora($numeros[10]["numero"], 
       $numeros[20]["numero"], $numeros[30]["division"]) . "<br>";

       echo "Resto: " . calculadora($numeros[10]["numero"], 
       $numeros[20]["numero"], $numeros[30]["resto"]) . "<br>";
       break;
   };
    ?>