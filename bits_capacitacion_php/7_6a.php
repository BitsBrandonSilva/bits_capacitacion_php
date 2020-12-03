<?php

/**
 * Ejercicio 7_6a
 */

/**
 * Trait insurance
 */
trait Insurance
{
    private $_age = "";
    private $_name = "";

    /**
     * Funcion getAge
     * 
     * @return age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Funcion setAge
     * 
     * @return age
     */
    public function setAge($_age)
    {
        $this->age = $_age;
    }
    
    /**
     * Funcion getName
     * 
     * @return name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Funcion setName
     * 
     * @return name
     */
    public function setName($_name)
    {
        $this->name = $_name;
    }

    /**
     * Funcion calculateMontlyFee
     * 
     * @return monthlyFee
     */
    public function calculateMontlyFee($_age, $_name)
    {
        $monthly_fee = $_age * strlen($_name);
        return print $monthly_fee . "<br>";
    }
}

?>