<?php
    require('7_1a.php');
    use Php\Vehicles as Driving;

    $vehicle1 = new Driving\Vehicle();
    $vehicle1->setBrand("Ford");
    $vehicle1->setSeats(4);
    $vehicle1->setLicensePlate("SOD38B");
    $vehicle1->setFuelLevel(10);
    $vehicle1->setCurrentSpeed(1);
    //$vehicle1->setState("On");

    print "Marca " . $vehicle1->getBrand() . "<br>";
    print "Sillas: " . $vehicle1->getSeats() . "<br>";
    print "Matricula: " . $vehicle1->getLicensePlate() . "<br>";
    print "Velocidad actual: " . $vehicle1->getCurrentSpeed() . "<br>";
    print "Estado del coche: " . $vehicle1->getState() . "<br>";

    print $vehicle1->fillTank(10, 10 , 10) . "<br>";
    print $vehicle1->startEngine($vehicle1->getState()) . "<br>";
    print $vehicle1->accelerate($vehicle1->getCurrentSpeed(), $vehicle1->getFuelLevel()) . "<br>";
    print $vehicle1->accelerate($vehicle1->getCurrentSpeed(), $vehicle1->getFuelLevel() , 2) . "<br>";
    print $vehicle1->accelerate($vehicle1->getCurrentSpeed(), $vehicle1->getFuelLevel(), 3) . "<br>";
    print $vehicle1->accelerate($vehicle1->getCurrentSpeed(), $vehicle1->getFuelLevel(), 4) . "<br>";
    print $vehicle1->accelerate($vehicle1->getCurrentSpeed(), $vehicle1->getFuelLevel(), 5) . "<br>";
    print $vehicle1->slowDown(6) . "<br>";
    print $vehicle1->slowDown(5) . "<br>";
    print $vehicle1->slowDown(4) . "<br>";
    print $vehicle1->slowDown(3) . "<br>";
    print $vehicle1->slowDown(2) . "<br>";
    print $vehicle1->slowDown(1) . " ";
    print $vehicle1->slowDown(0) . "<br>";
    print $vehicle1->stopEngine( 0, 'On');
?>