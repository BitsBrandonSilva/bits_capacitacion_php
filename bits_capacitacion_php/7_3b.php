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
    
    public $type = "Car";

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
}

?>