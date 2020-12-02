<?php

    /**
     * Definicion de constantes
     */
    define("DESCUENTO", 10); // se hace descuento de 10€

    $precio_artic1 = 50;
    $precio_artic2 = 43.5;

    echo "Precio inicial articulo 1 es: " 
    . $precio_artic1;

    echo "<p>El articulo 1 con descuento es: " 
    . ($precio_artic1 - DESCUENTO) . " €.</p>";

    echo "Precio inicial articulo 2 es: " . $precio_artic2;
    echo "<p>El articulo 2 con descuento es: " 
    . ($precio_artic2 - DESCUENTO) . " €.</p>";
?>