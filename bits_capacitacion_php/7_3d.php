<?php

    /**
     * Ejercicio 7_3d
     */

    require '7_1a.php';
    use Php\Vehicles as AllVehicles;
    require '7_3a.php';
    require '7_3b.php';
    require '7_3c.php';

    //---------------------------------Se crea Objeto1
    $motorbaike1 = new Motorbike("Yamaha", 2, "VEC38B", 10, 10, 0);
    $motorbaike1->setState('On');

    print $motorbaike1->accelerate(1.5) . "<br>";
    print $motorbaike1->accelerate() . "<br>";
    print $motorbaike1->accelerate() . "<br>";

    $longMotor = 4;
    for ($i = 0; $i < $longMotor; $i++) {
        print $motorbaike1->slowDown() . "<br>";
    }

    print $motorbaike1->stopEngine() . "<br>";


    //---------------------------------Se crea Objeto2
    $truck1 = new Truck("Toyota", 2, "TEC31N", 10, 3, 0);
    $truck1->setFuelCapacity(10);
    

    print $truck1->fillTank(
        $truck1->getFuelCapacity(), $truck1->getFuelLevel(), 2
    ) . "<br>";

    $longTruck = 3;
    for ($i = 0; $i < $longTruck; $i++) {
        print $truck1->accelerate() . "<br>";
    }

    //---------------------------------Se obtiene lista de Vehiculos
    $car1 = new Car("Ferrari", 2, "TEC31N", 10, 10, 1);
    
    ?>