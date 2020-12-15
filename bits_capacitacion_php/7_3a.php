<?php

    require_once '7_1a.php';
    use Php\Vehicles;

    /**
     * Clase que hereda de Vehicles
     */
class Motorbike extends Vehicles\Vehicle
{
    /**
     * Funcion contructor Motorbike
     * 
     * @return type
     */
    public function __construc(
        $brand, $seats, $license_plate, $fuel_capacity, $fuel_level, $current_speed
        ) {
        parent::__construc(
            $brand, $seats, $license_plate, $fuel_capacity, $fuel_level, $current_speed
        );
        $this->type = 'motorobike';
    }
    
    /**
     * Funcio acceleration
     * 
     * @return acceleration
     */
    public function acceleration($acceleration = 1)
    {
        $acceleration = 3;
        parent::acceleration($acceleration);
        
    }

}

?>