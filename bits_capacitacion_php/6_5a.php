<?php

    //-----------------Punto 1
    $fichero = 'php_example.log';
    $data = $_SERVER['REMOTE_ADDR'] . " | " . time() . " | " . $_SERVER['HTTP_USER_AGENT'] . "\n";
    
    //-----------------Punto 2
    file_put_contents($fichero, $data, FILE_APPEND);

    //-----------------Punto 3
    echo "Se ha alamacenado en el archivo " . $fichero . " la: " . $data;

?>