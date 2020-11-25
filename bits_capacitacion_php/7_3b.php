<?php

    require_once('7_1a.php');
    use Php\Vehicles as Carro;

    class Car extends Carro\Vehicle {
        
        public $type = "Car";

        public function getType() {
            return $this->type;
        }

        public function setType($type) {
            $this->type = $type;
        }
    }
?>