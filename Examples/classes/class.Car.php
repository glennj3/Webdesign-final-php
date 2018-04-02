<?php

class Car {
    // Attributes / Properties
    public $license_plate;
    private $fuel;
    private $max_fuel;
    
    function __construct($license_plate, $fuel, $max_fuel) {
        // Variables in a method are separate from those of the overall class
        // To access class level variable utilize the $this keyword
        $this->license_plate = $license_plate;
        $this->fuel = $fuel;
        $this->max_fuel = $max_fuel;
    }
    
    function refuel() {
        // Set the current fuel level of the object to equal max fuel
        $this->fuel = $this->max_fuel;
    }
    
    function getFuel() {
        return $this->fuel;
    }
    
    function get($key) {
        return $this->$key;
    }
    
    function set($key, $value) {
        $this->$key = $value;
    }
}

$car1 = new Car('123 ABC', 25, 75);

if( $car1->getFuel() < 15 ) {
    $car1->refuel();
}