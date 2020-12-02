<?php

/**
 * Ejercicio 7_4a
 */

/**
 * Clase pet
 */
abstract class Pet{

    public $age = "2";

    /**
     * Funcion constructor
     */
    public function __construct($age)
    {
        $this->age = $age;
    }

    /**
     * Funcion abstracta Feed
     * 
     * @return function
     */
    abstract public function feed($quantity);
}

?>