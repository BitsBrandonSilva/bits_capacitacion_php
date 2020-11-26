<?php

    interface Codify {

        public function encode();

        public function decode();

    }

    

    class Serialize implements Codify {

        public function encode($data = false) {
            return print json_encode($data) . "<br>";
        }

        public function decode($data = false) {
            return print serialize($data) . "<br><br>";
        }
    }

    class Json implements Codify {

        public function encode($data = false) {
            return print json_encode($data) . "<br>";
        }

        public function decode($data = false) {
            return print serialize($data) . "<br><br>";
        }

    }

    $data = ['apples' => ['red' => 5, 'green' => 23], 'oranges' => 12, 'pears' => 'Not available'];
    
    $serialize = new serialize();
    $serialize->encode($data);
    $serialize->decode($data);

    $json = new Json();
    $json->encode($data);
    $json->decode($data);
    
?>