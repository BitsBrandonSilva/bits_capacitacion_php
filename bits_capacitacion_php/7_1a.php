<?php

    /**
     * Ejercicio 7_1a
     */

    namespace Php\Vehicles;

    /**
     * Clase Vehicle
     */
class Vehicle
{
    public $brand = '';
    public $seats = '';
    public $fuel_capacity = 0;
    public $license_plate = '';
    protected $fuel_level = 0;
    protected $current_speed = 0;
    protected $state = 'Off';

    /**
     * Funcion constructor
     */
    public function __construct(
        $brand, $seats, $license_plate, $fuel_capacity, $fuel_level, $current_speed
    ) {
        $this->brand = $brand;
        $this->seats = $seats;
        $this->license_plate = $license_plate;
        $this->fuel_capacity;
        $this->fuel_level = $fuel_level;
        $this->current_speed = $current_speed;
    }

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
    public function startEngine()
    {
        if ($this->getState() == 'Off') {
            $this->setState('On');
            return "El vehiculo " . $this->license_plate 
            . " se ha arrancado " . $this->getState();
        } else {
            return "El vehiculo " . $this->license_plate 
            . " ya estaba en marcha " . $this->getState();
        };
    }

    /**
     * Funcion accelerate
     * 
     * @return accelerate
     */
    public function accelerate($acceleration = 1)
    {
        if ($acceleration >= 1 && $acceleration <= 5) {
            $this->setCurrentSpeed($this->getCurrentSpeed() + $acceleration);
            $this->setFuelLevel($this->getFuelLevel() - $acceleration);
            return "El vehiculo " . $this->getLicensePlate() 
            . " ha incrementado la velocidad en " 
            . $acceleration . ". La velocidad acutal es " . $this->current_speed . 
            ". El nivel de combustible es " . $this->fuel_level;
        } else {
            $this->setCurrentSpeed($this->getCurrentSpeed() + 1);
            $this->setFuelLevel($this->getFuelLevel() - 1);
            return "El vehiculo " . $this->getLicensePlate()
            . " ha incrementado la velocidad en " 
            . $acceleration . ". La velocidad acutal es " . $this->getCurrentSpeed() . 
            ". El nivel de combustible es " . $this->getFuelLevel();
        }
        
    }

    /**
     * Funcion slowDown
     * 
     * @return slowDown
     */
    public function slowDown()
    {
        if ($this->getCurrentSpeed() <= 1) {
            return "El vehiculo " . $this->getLicensePlate() . " Se ha detenido.";
        } else {
            $this->setCurrentSpeed($this->getCurrentSpeed() - 1);
            return "El vehiculo " . $this->getLicensePlate() . 
            " ha decrementado su velocidad. La velocidad actual es " 
            . $this->getCurrentSpeed();
        };
    }

    /**
     * Funcion stopEngine
     * 
     * @return stopEngine
     */
    public function stopEngine()
    {
        if ($this->getCurrentSpeed() <= 1 && $this->getState() == 'On') {
            $this->setState('Off');
            return "El vehiculo " . $this->license_plate . " se ha apagado";
        } else {
            return "El vehiculo " . $this->license_plate 
            . " ya estaba apagado " . $this->getState();
        };
    }

    /**
     * Funcion fillTank
     * 
     * @return fillTank
     */
    public function fillTank($fuel_capacity, $fuel_level, $quantity)
    {
        $this->setFuelLevel($quantity + $this->getFuelLevel());
        if ($this->getFuelLevel() <= $this->getFuelCapacity()) {
            return "El vehiculo " . $this->license_plate . " se ha cargado con " 
            . $quantity . " litro/s de combustible, nivel de combustible " . $this->getFuelLevel() 
            . " Capacidad total " . $this->getFuelCapacity();
        } else {
            if ($this->getFuelLevel() >= $this->getFuelCapacity()) {
                return "El deposito esta lleno " . $this->getFuelCapacity();
            }
        }
    }
}
?>