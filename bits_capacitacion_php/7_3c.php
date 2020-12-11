<?php

    require_once '7_1a.php';
    use Php\Vehicles;

    /**
     * Clase que hereda de Vehicles
     */
class Truck extends Vehicles\Vehicle
{
    public $type = "Truck";

    /**
     * Funcion getType
     * 
     * @return type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Funcion setType
     * 
     * @return type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Funcion slowDown
     * 
     * @return slowDown
     */
    public function slowDownn()
    {
        $this->setCurrentSpeed($this->getCurrentSpeed() - 0.5);
        return "La velociadad se ha decrementado " . $this->getCurrentSpeed();
    }
}

?>