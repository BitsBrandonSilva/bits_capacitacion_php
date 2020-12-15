<?php

    /**
     * Ejercicio 7_2c
     */
    require '7_1a.php';
    use Php\Vehicles as Driving;

    $vehicle1 = new Driving\Vehicle("Ford", 4, "SOD38B", 10, 5, 1);
    $vehicle1->setFuelCapacity(10);
    print "Marca " . $vehicle1->getBrand() . "<br>";
    print "Sillas: " . $vehicle1->getSeats() . "<br>";
    print "Matricula: " . $vehicle1->getLicensePlate() . "<br>";
    print "Velocidad actual: " . $vehicle1->getCurrentSpeed() . "<br>";
    print "Estado del coche: " . $vehicle1->getState() . "<br>";

    print $vehicle1->fillTank(
        $vehicle1->getFuelCapacity(), $vehicle1->getFuelLevel(), 2
    ) . "<br>";

    print $vehicle1->startEngine() . "<br>";

    $longAccelerate = 6;
    for ($i = 1; $i < $longAccelerate; $i++) {
        print $vehicle1->accelerate() . "<br>";
    }

    $longSlowDown = 6;
    for ($i = 0; $i < $longSlowDown; $i++) {
        print $vehicle1->slowDown() . "<br>";
    }

    print $vehicle1->stopEngine();

?>