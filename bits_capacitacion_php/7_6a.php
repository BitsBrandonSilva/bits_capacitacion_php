<?php
    trait Insurance {

        private $age = "";
        private $name = "";

        public function getAge() {
            return $this->age;
        }

        public function setAge($age) {
            $this->age = $age;
        }
        
        public function getName(){
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function calculateMontlyFee($age, $name) {
            $monthly_fee = $age * strlen($name);
            return print $monthly_fee . "<br>";
        }

    }
?>