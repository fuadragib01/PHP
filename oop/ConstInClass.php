<?php
// in procedural way
define( "HI", 123 );
echo HI;
const HELLO = 456;
echo HELLO;

// in class

class MyClass {
    const CITY = "Dhaka";
    function sayHi() {
        echo "\nHi from " . self::CITY;
        echo "\nHi from " . $this::CITY;
    }
}

$m = new MyClass();
// echo $m->CITY; // This is not valid

echo $m::CITY;
echo MyClass::CITY;
$m->sayHi();