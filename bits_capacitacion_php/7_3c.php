<?php

    require_once '7_1a.php';
    use Php\Vehicles;

    /**
     * Clase que hereda de Vehicles
     */
class Truck extends Vehicles\Vehicle
{
    /**
     * Funcion constructor Truck
     * 
     * @return type
     */
    public function __construc(
        $brand, $seats, $license_plate, $fuel_capacity, $fuel_level, $current_speed
        ) {
        parent::__construc(
            $brand, $seats, $license_plate, $fuel_capacity, $fuel_level, $current_speed
        );
        $this->type = 'truck';
    }

    /**
     * Funcion slowDown
     * 
     * @return slowDown
     */
    public function slowDown()
    {
        $this->setCurrentSpeed($this->getCurrentSpeed() - 0.5);
        return "La velociadad se ha decrementado " . $this->getCurrentSpeed();
    }
}

?>