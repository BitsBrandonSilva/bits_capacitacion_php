<?php

    $employees = [
        13 => [
            "Firstname" => "Gabriel",
            "Lastname" => "Jaimes",
            "Salary" => 900000
        ],

        3 => [
            "Firstname" => "Alexander",
            "Lastname" => "Trujillo",
            "Salary" => 2700000
        ],

        42 => [
            "Firstname" => "Saul",
            "Lastname" => "Mora",
            "Salary" => 1800000
        ]
    ];

    
    //--------------------------------------Rango salarios
    foreach($employees as $empleados) {
        if ($empleados["Salary"] < 1000000) {
            echo $empleados["Firstname"] . " tiene salario bajo <br>";
            echo $empleados["Salary"] . "<br>";
        }elseif ($empleados["Salary"] > 2000000) {
            echo $empleados["Firstname"] . " tiene salario alto <br>";
            echo $empleados["Salary"] . "<br>";
        }elseif ($empleados["Salary"] > 1000000 && $empleados["Salary"] < 2000000) {
            echo $empleados["Firstname"] . " tiene salario medio <br>";
            echo $empleados["Salary"] . "<br>";
        }
    }

    echo "<br>";

    //------------------------------------------Rangos de salario por persona
    if ($employees[13]["Salary"] < 1000000) {
        echo $employees[13]["Firstname"] . " " . $employees[13]["Lastname"] . " con ID: " . key($employees) . ", tiene un salario bajo <br>";
        if ($employees[3]["Salary"] > 2000000) {
            echo $employees[3]["Firstname"] . " " . $employees[3]["Lastname"] . " con ID: " . "3" . ", tiene un salario alto <br>";
            if ($employees[42]["Salary"] > 1000000 || $employees[42]["Salary"] < 2000000) {
                echo $employees[42]["Firstname"] . " " . $employees[42]["Lastname"] . " con ID: " . "42" . ", tiene un salario medio <br><br>";
            }
        }
    }


    //--------------------- Rango mas alto
    if ($employees[3]["Salary"] > 2000000) {
        echo $employees[3]["Firstname"] . " tiene el salario mas alto de todos<br>";
        echo $employees[3]["Salary"] . "<br>";
    }
?>