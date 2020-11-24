<?php

    require('7_4a.php');
    class Cat extends Pet {

        private $name = "";
        public static $max_feed = "5";
        private $feed = "0";

        public function __construct($name, $age) {
            parent::__construct($age);
            $this->name = 'Rocky';
            $this->age = 2;
        }

        public function feed($quantity) {
            $this->feed = $this->feed + $quantity;
            return $this->feed;
        }
    }

?>