<?php

    $countries = [
    'uk' => 'United Kingdom',
    'fr' => 'France',
    'pt' => 'Portugal',
    've' => 'Venezuela',
    'at' => 'Austria',
    'es' => 'Spain',
    'co' => 'Colombia'
   ];

   //------------------Punto 1
   $find = "Colombia";
   if (in_array($find, $countries)) {
       print "Mi pais de origen es " . $find . " y esta en la lista";
   };
   echo "<br><br>";

   //------------------Punto 2
   asort($countries);
    foreach($countries as $clave => $val ) {
        echo $clave . " " . $val . "<br>";
    };
    echo "<br><br>";

    //------------------Punto 3
    print_r($countries); echo "<br><br>";

    //------------------Punto 4
    $string = implode(", ", $countries);
    echo $string;

?>