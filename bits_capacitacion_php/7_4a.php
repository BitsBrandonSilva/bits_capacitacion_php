<?php

    abstract class Pet {

        public $age = "2";

        public function __construct($age) {
            $this->age = $age;
        }

        abstract public function feed($quantity);
    }

?>