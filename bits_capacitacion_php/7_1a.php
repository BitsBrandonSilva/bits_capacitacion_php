<?php

    /**
     * Ejercicio 7_1a
     */

    namespace Php\Vehicles;

    /**
     * Clase Vehicle
     */
class Vehicle {
    public $brand = '';
    public $seats = '';
    public $fuel_capacity = '0';
    public $license_plate = '';
    protected $fuel_level = '0';
    protected $current_speed = '0';
    protected $state = 'Off';

    /**
     * Funcion getbrand
     *
     * @return getBrand
     */
    public function getBrand() 
    {
        return $this->brand;
    }

    /**
     * Funcion setbrand
     * $brand
     * 
     * @return $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * Funcion getSeats
     *
     * @return getSeats
     */
    public function getSeats() 
    {
        return $this->seats;
    }

    /**
     * Funcion setSeats
     *
     * @return setSeats
     */
    public function setSeats($seats) 
    {
        $this->seats = $seats;
    }

    /**
     * Funcion getFuelCapacity
     *
     * @return getFuelCapacity
     */
    public function getFuelCapacity() 
    {
        return $this->fuel_capacity;
    }

    /**
     * Funcion setFuelCapacity
     *
     * @return setFuelCapacity
     */
    public function setFuelCapacity($fuel_capacity)
    {
        $this->fuel_capacity = $fuel_capacity;
    }

    /**
     * Funcion getLicensePlate
     *
     * @return getLicensePlate
     */
    public function getLicensePlate() 
    {
        return $this->license_plate;
    }

    /**
     * Funcion setLicensePlate
     * 
     * @return setLicensePlate
     */
    public function setLicensePlate($license_plate)
    {
        $this->license_plate = $license_plate;
    }

    /**
     * Funcion getFuelLevel
     * 
     * @return getFuelLevel
     */
    public function getFuelLevel() 
    {
        return $this->fuel_level;
    }

    /**
     * Funcion setFuelLevel
     * 
     * @return setFuelLevel
     */
    public function setFuelLevel($fuel_level)
    {
        $this->fuel_level = $fuel_level;
    }

    /**
     * Funcion getCurrentSpeed
     * 
     * @return getCurrentSpeed
     */
    public function getCurrentSpeed()
    {
        return $this->current_speed;
    }

    /**
     * Funcion setCurrentSpeed
     * 
     * @return setCurrentSpeed
     */
    public function setCurrentSpeed($current_speed)
    {
        $this->current_speed = $current_speed;
    }

    /**
     * Funcion getState
     * 
     * @return getState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Funcion setState
     * 
     * @return setState
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Funcion startEngine
     * 
     * @return startEngine
     */
    public function startEngine($state)
    {
        if ($state == 'Off') {
            $state = 'On';
            return "El vehiculo " . $this->license_plate 
            . " se ha arrancado " . $state;
        } else {
            return "El vehiculo " . $this->license_plate 
            . " ya estaba en marcha " . $state;
        };
    }

    /**
     * Funcion accelerate
     * 
     * @return accelerate
     */
    public function accelerate($current_speed, $fuel_level, $acceleration = false)
    {
        if ($acceleration > 0) {
            $current_speed = $current_speed + $acceleration;
            $fuel_level = $fuel_level - $acceleration;
            return "El vehiculo " . $this->license_plate 
            . " ha incrementado la velocidad en " 
            . $acceleration . ". La velocidad acutal es " . $current_speed . 
            ". El nivel de combustible es " . $fuel_level;
        } else {
            $current_speed++;
            $fuel_level--;
            return "El vehiculo " . $this->license_plate 
            . " ha incrementado la velocidad en " 
            . $acceleration . ". La velocidad acutal es " . $current_speed . 
            ". El nivel de combustible es " . $fuel_level;
        }
        
    }

    /**
     * Funcion slowDown
     * 
     * @return slowDown
     */
    public function slowDown($current_speed)
    {
        if ($current_speed == 0) {
            return "El vehiculo " . $this->license_plate . " Se ha detenido.";
        } else {
            $current_speed--;
            return "El vehiculo " . $this->license_plate . 
            " ha decrementado su velocidad. La velocidad actual es " 
            . $current_speed;
        };
    }

    /**
     * Funcion stopEngine
     * 
     * @return stopEngine
     */
    public function stopEngine($current_speed, $state)
    {
        if ($current_speed == 0 && $state == 'On') {
            return "El vehiculo " . $this->license_plate . " se ha apagado";
        } else {
            return "El vehiculo " . $this->license_plate 
            . " ya estaba apagado " . $this->state;
        };
    }

    /**
     * Funcion fillTank
     * 
     * @return fillTank
     */
    public function fillTank($fuel_capacity, $fuel_level, $quantity)
    {
        $sum = $quantity + $fuel_level;
        if ($sum <= $fuel_capacity && $sum <= $fuel_capacity) {
            return "El vehiculo " . $this->license_plate . " se ha cargado con " 
            . $quantity . " litro/s de combustible, nivel de combustible " . $sum 
            . " Capacidad total " . $fuel_capacity;
        } else {
            if ($sum > $fuel_capacity) {
                return "El deposito esta lleno " . $fuel_capacity;
            }
        }
    }
}
?>