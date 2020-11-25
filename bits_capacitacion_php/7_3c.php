<?php

    require_once('7_1a.php');
    use Php\Vehicles;

    class Truck extends Vehicles\Vehicle {

        public $type = "Truck";

        public function getType() {
            return $this->type;
        }

        public function setType($type) {
            $this->type = $type;
        }

        public function slowDown($current_speed) {
            $current_speed = $current_speed - 0.5;
            return "La velociadad se ha decrementado " . $current_speed;
        }
    }
?>