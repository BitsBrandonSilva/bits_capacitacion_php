<?php

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $country = $_POST["country"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    //--------------------punto1
    $patron1 = "/^[A-Z][a-z]{8}/";
    //--------------------punto2
    $patron2 = "/[a-z]{10}([_, .,\/])+/";

    $coincidencia1 = preg_match_all($patron1, $username, $matches);
    $coincidencia2 = preg_match_all($patron2, $password, $matches);

    //--------------------punto3
    echo "Nombre: " . $firstname . "<br>";
    echo "Apellido: " . $lastname . "<br>";

    //--------------------punto5
    if ($username = $coincidencia1 && $password = $coincidencia2) {
       print md5($password = $_POST["password"]);
    }else {
        //--------------------punto4
        echo "El nombre de usuario '" . $username = $_POST["username"] . "' (No es valido) <br>";
        echo "La contraseña '" . $password . "' (No es valido) <br>";
    };
?>