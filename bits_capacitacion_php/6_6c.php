<?php

    $string = "Vestibulum ante ipsum primis Drupal 7 faucibus orci luctus et ultrices posuere Drupal 10 cubilia Curae; Morbi euismod drUpal9 iaculis sem a gravida drupal6. ";
    
    //------------------ Punto 1
    $patron = "/(drupal) ?(?)(\d)/i";

    //------------------ Punto 2 y 3
    echo preg_replace($patron, 'Drupal-$2$3', $string);
?>