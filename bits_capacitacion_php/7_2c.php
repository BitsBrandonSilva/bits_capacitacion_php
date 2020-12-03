<?php

    /**
     * Ejercicio 7_2c
     */
    require '7_1a.php';
    use Php\Vehicles as Driving;

    $vehicle1 = new Driving\Vehicle("Ford", 4, "SOD38B", 10, 1);
    print "Marca " . $vehicle1->getBrand() . "<br>";
    print "Sillas: " . $vehicle1->getSeats() . "<br>";
    print "Matricula: " . $vehicle1->getLicensePlate() . "<br>";
    print "Velocidad actual: " . $vehicle1->getCurrentSpeed() . "<br>";
    print "Estado del coche: " . $vehicle1->getState() . "<br>";

    print $vehicle1->fillTank(10, 10, 10) . "<br>";
    print $vehicle1->startEngine($vehicle1->getState()) . "<br>";

for ($i = $vehicle1->getCurrentSpeed(); $i < 6; $i++) {
    print $vehicle1->accelerate($i) . "<br>";
}

for ($j = $i; $j >= 0; $j--) {
    print $vehicle1->slowDown($j) . "<br>";
}

    print $vehicle1->stopEngine(0, 'On');

?>