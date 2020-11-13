<?php

    $string = "aabCcCCddDDeFFgGGhhhhIJJkLLmmmmnOpQrrrSssTTUV";

    $coincidencias = preg_match_all("/[a-z]{2}[A-Z]{2,}/", $string, $matches);

    print_r($matches);
?>