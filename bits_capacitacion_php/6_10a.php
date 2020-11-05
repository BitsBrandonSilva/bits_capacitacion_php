<?php

$cadena = "1, 4, 7, 15, 222, 45, 68, 342";


echo preg_replace_callback("/[0-9]{1,2}/", function ($coincidencia) { 
    if($coincidencia[0] % 2 == 0) {
        echo preg_replace("/[0-9]{1,2}/", $coincidencia[0] * 2 ,$coincidencia[0]) . "  El numero base se duplico <br><br>";
    }else {
        echo preg_replace("/[0-9]{1,2}/", number_format(rand(1000, 10000), 2, ".", ","), $coincidencia[0]) . "  SUSTITUIDO <br><br>";
    }
}, $cadena);

echo "<br><br>";

echo "Cadena de texto original <br><br>";
print json_encode($cadena);

?>