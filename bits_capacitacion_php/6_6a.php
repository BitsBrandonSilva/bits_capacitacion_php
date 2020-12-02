<?php

    /**
     * Ejercicio 6_6a
     */
    $users = [
        3 => 'foo', 
        24 => 'boB654', 
        26 => 'billanderson', 
        45 => 'paulmAc2'
    ];
   
    $output = preg_grep("/\w{6}|[a-z]{1}|[A-Z]{1}|^[a-z]|[0-9]{1}/", $users);
    
    print_r($output);    

    ?>