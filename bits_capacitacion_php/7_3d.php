<?php

    require('7_1a.php');
    use Php\Vehicles as AllVehicles;
    require('7_3a.php');
    require('7_3b.php');
    require('7_3c.php');

    //---------------------------------Se crea Objeto1
    $motorbaike1 = new Motorbike();
    $motorbaike1->setBrand("Ferrari");
    $motorbaike1->setSeats(2);
    $motorbaike1->setLicensePlate("VEC38B");
    $motorbaike1->setFuelLevel(10);
    $motorbaike1->setCurrentSpeed(1);
    $motorbaike1->setState('On');

    print $motorbaike1->acceleration($motorbaike1->getCurrentSpeed(), $motorbaike1->getFuelLevel()) . "<br>";
    print $motorbaike1->acceleration($motorbaike1->getCurrentSpeed(), $motorbaike1->getFuelLevel(), 4) . "<br>";
    print $motorbaike1->acceleration($motorbaike1->getCurrentSpeed(), $motorbaike1->getFuelLevel(), 5) . "<br>";
    print $motorbaike1->slowDown(6) . "<br>";
    print $motorbaike1->slowDown(5) . "<br>";
    print $motorbaike1->slowDown(4) . "<br>";
    print $motorbaike1->slowDown(3) . "<br>";
    print $motorbaike1->slowDown(2) . "<br>";
    print $motorbaike1->slowDown(1) . "<br>";
    print $motorbaike1->slowDown(0) . "<br>";
    print $motorbaike1->stopEngine(0, 'On') . "<br><br>";

    //---------------------------------Se crea Objeto2
    $truck1 = new Truck();
    $truck1->setBrand("Toyota");
    $truck1->setSeats(2);
    $truck1->setLicensePlate("TEC31N");
    $truck1->setFuelCapacity(10);
    $truck1->setFuelLevel(5);
    $truck1->setCurrentSpeed(1);
    $truck1->setState('On');

    print $truck1->fillTank($truck1->getFuelCapacity(), $truck1->getFuelLevel(), 1) . "<br>";
    print $truck1->accelerate($truck1->getCurrentSpeed(), $truck1->getFuelLevel(), 1) . "<br>";
    print $truck1->accelerate($truck1->getCurrentSpeed(), $truck1->getFuelLevel(), 2) . "<br>";
    print $truck1->accelerate($truck1->getCurrentSpeed(), $truck1->getFuelLevel(), 3) . "<br>";

?>