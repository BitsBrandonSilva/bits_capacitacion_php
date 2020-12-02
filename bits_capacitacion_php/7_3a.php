<?php

    require_once '7_1a.php';
    use Php\Vehicles;

    /**
     * Clase que hereda de Vehicles
     */
class Motorbike extends Vehicles\Vehicle
{

    public $type = "Motorbike";

    /**
     * Fucion getType
     * 
     * @return type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Fucion setType
     * 
     * @return type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * Funcio acceleration
     * 
     * @return acceleration
     */
    public function acceleration($current_speed, $fuel_level, $acceleration = false)
    {
        if ($acceleration > 0) {
            $current_speed = $current_speed + $acceleration;
            $fuel_level = $fuel_level - $acceleration;
            return "El vehiculo " . $this->license_plate 
            . " ha incrementado la velocidad en " 
            . $acceleration . ". La velocidad acutal es " . $current_speed 
            . ". El nivel de combustible es " . $fuel_level;
        } else {
            $current_speed = $current_speed + 3;
            $fuel_level = $fuel_level - 3;
            return "El vehiculo " . $this->license_plate 
            . " ha incrementado la velocidad en " 
            . $acceleration . ". La velocidad acutal es " . $current_speed 
            . ". El nivel de combustible es " . $fuel_level;
        }
        
    }

}

?>