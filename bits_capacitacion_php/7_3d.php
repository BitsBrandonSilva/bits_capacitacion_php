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
    $motorbaike1 = new Motorbike("Yamaha", 2, "VEC38B", 10, 1);

for ($i = $motorbaike1->getCurrentSpeed(); $i < 6; $i++) {
    print $motorbaike1->accelerate($i) . "<br>";
}
    
for ($j = $i; $j >= 0; $j--) {
    print $motorbaike1->slowDown($j) . "<br>";
}

    //---------------------------------Se crea Objeto2
    $truck1 = new Truck("Toyota", 2, "TEC31N", 7, 1);
    $truck1->setFuelCapacity(10);

    print $truck1->fillTank(
        $truck1->getFuelCapacity(), $truck1->getFuelLevel(), 1
    ) . "<br>";

    for ($i = $truck1->getCurrentSpeed(); $i < 4; $i++) {
        print $truck1->accelerate($i) . "<br>";
    }

    //---------------------------------Se obtiene lista de Vehiculos
    $car1 = new Car("Ferrari", 2, "TEC31N", 10, 1);
    print $car1->getType() . "<br>";
    print $motorbaike1->getType() . "<br>";
    print $truck1->getType() . "<br>";

    ?>