<?php 

class Student {
    private $name;
    private $roll;

    function __construct( $name, $roll ) {
        $this->name = $name;
        $this->roll = $roll;
    }

    function __set( $prop, $value ) {
        $this->$prop = $value;
    }

    function __get( $prop ) {
        return $this->$prop;
    }
}

$x = new Student( 'Abdul', '12' );

$x->name = 'Karim'; // though name is a private property, it can be accessed via __get and __set magic method
echo $x->name;