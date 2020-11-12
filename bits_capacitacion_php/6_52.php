<?php

    //-----------------Punto 1
    $fichero = 'php_example.log';
    $fp = fopen($fichero, 'a+');
    
    //-----------------Punto 2
    fwrite($fp, $_SERVER['REMOTE_ADDR'] . " | " . time() . " | " . $_SERVER['HTTP_USER_AGENT'] . "\n" );
    fclose($fp);

    //-----------------Punto 3
    echo "Se ha alamacenado en el archivo " . $fichero . " la ip : " . $_SERVER['REMOTE_ADDR'] . " , timestamp: " . time() . " y el user agent: " . $_SERVER['HTTP_USER_AGENT'];

?>