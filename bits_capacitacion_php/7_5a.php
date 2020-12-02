<?php

/**
 * Ejercicio 7_5a
 */

/**
 * Interfaz Codify
 */
interface Codify
{
    /**
     * Funcion enconde
     * 
     * @return json
     */
    public function encode();

    /**
     * Funcio decode
     * 
     * @return serialize
     */
    public function decode();

}

    
/**
 * Clase serializa que implementa a Codify
 */
class Serialize implements Codify
{

    /**
     * Definicion funcion encode
     * 
     * @return json
     */
    public function encode($data = false)
    {
        return print json_encode($data) . "<br>";
    }

    /**
     * Definicion funcion decode
     * 
     * @return serialize
     */
    public function decode($data = false)
    {
        return print serialize($data) . "<br><br>";
    }

}

/**
 * Clase json que implementa a Codify
 */
class Json implements Codify
{
    /**
     * Definicion funcion encode
     * 
     * @return json
     */
    public function encode($data = false)
    {
        return print json_encode($data) . "<br>";
    }

    /**
     * Definicion funcion decode
     * 
     * @return serialize
     */
    public function decode($data = false)
    {
        return print serialize($data) . "<br><br>";
    }

}

    $data = ['apples' => ['red' => 5, 'green' => 23], 
    'oranges' => 12, 'pears' => 'Not available'];
    
    $serialize = new serialize();
    $serialize->encode($data);
    $serialize->decode($data);

    $json = new Json();
    $json->encode($data);
    $json->decode($data);
    
    ?>