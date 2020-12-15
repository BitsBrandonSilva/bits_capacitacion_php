<?php

    /**
     * Ejercicio 7_3b
     */

    require_once '7_1a.php';
    use Php\Vehicles as Carro;

    /**
     * Clase Car que hereda de Vehicle
     */
class Car extends Carro\Vehicle
{
    /**
     * Funcion constructor Car
     * 
     * @return type
     */
    public function __construc(
        $brand, $seats, $license_plate, $fuel_capacity, $fuel_level, $current_speed
        ) {
        parent::__construc(
            $brand, $seats, $license_plate, $fuel_capacity, $fuel_level, $current_speed
        );
        $this->type = 'car';
    }
}

?>