<?php

$guitars = [
    [
        "Jackson" => 321
    ],

    [
        "Ibañez" => 123
    ],

    [
        "ESP" => 789
    ]
];

    //--------------- Funcion count()
    $numero_instrumentos = count($guitars);

    echo "Funcion count() de PHP <br>";
    echo "El numero de guitarras que hay es: $numero_instrumentos <br><br>";


    //------------------------------ Funcion nombre_mes
    function nombre_mes ($num_mes) {
        switch ($num_mes) {
            case 1:
                $mes_texto = "Enero";
                break;
            
            case 2:
                $mes_texto = "Febrero";
                break;

            case 3:
                $mes_texto = "Marzo";
                break;

            case 4:
                $mes_texto = "Abril";
                break;

            case 5:
                $mes_texto = "Mayo";
                break;

            case 6:
                $mes_texto = "Junio";
                break;

            case 7:
                $mes_texto = "Julio";
                break;
            case 8:
                $mes_texto = "Agosto";
                break;
            case 9:
                $mes_texto = "Septiembre";
                break;
            case 10:
                $mes_texto = "Octubre";
                break;
            case 11:
                $mes_texto = "Noviembre";
                break;
            case 12:
                $mes_texto = "Diciembre";
                break;

            default :
            $mes_texto = "Mes no valido";
        }

        return $mes_texto;
    }

    $mes1 = 3;
    $mes2 = 6;
    $mes3 = 9;

    echo "Funcion personal nombre_mes <br><br>";
    echo "El mes 3 es: " . nombre_mes($mes1) . "<br>";
    echo "El mes 6 es: " . nombre_mes($mes2) . "<br>";
    echo "El mes 9 es: " . nombre_mes($mes3) . "<br><br>";


    //--------------------------- Parametros por valor y por referencia

    function incrementar_contador(&$contador) {
        if ($contador < 5) {
            $contador++;
            return TRUE;
        } else {
            return FALSE;
        }
    }

    $cont = 0;

    for ($i = 0; $i < 4; $i++) {
        if(incrementar_contador($cont)) {
            echo "El contador ha incrementado y su valor actuale es: $cont <br>";
        } else {
            echo "El contador ha llegado a su valor maximo y no ha sido incrementado. <br>";
        }
    }
?>