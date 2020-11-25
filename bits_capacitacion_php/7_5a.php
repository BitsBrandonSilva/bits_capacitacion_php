<?php

    interface Codify {

        public function encode($data);

        public function decode($data);

    }

    

    class Serialize implements Codify {
        
        public function encode($data) {
            return json_encode();
        }

        public function decode($data) {
            print serialize($data) . "<br><br>";
        }

    }

    class Json implements Codify {

        public function encode($data) {
            print json_encode($data) . "<br>";
        }

        public function decode($data) {
            return serialize();
        }
        
    }
    
    $data = ['apples' => ['red' => 5, 'green' => 23], 'oranges' => 12, 'pears' => 'Not available'];

    $serialize = new serialize();
    $serialize->decode($data);

    $json = new Json();
    $json->encode($data);
?>