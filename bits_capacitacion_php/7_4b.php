<?php

    /**
     * Ejercicio 7_4b
     */
    require '7_4a.php';

    /**
     * Clase Cat que hereda de Pet
     */
class Cat extends Pet {

    private $_name = "";
    public static $max_feed = "5";
    private $_feed = "0";

    /**
     * Funcion constructor
     */
    public function __construct($_name, $age) 
    {
        parent::__construct($age);
        $this->name = 'Rocky';
        $this->age = 2;
    }

    /**
     * Funcion feed
     * 
     * @return feed
     */
    public function feed($quantity)
    {
        $this->feed = $this->feed + $quantity;
        return $this->feed;
    }

}

?>