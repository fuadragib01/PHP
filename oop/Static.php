<?php

class MathCalculator {
    private $number;
    static $name;
    static function fibo( $n ) {
        // $this->number = 10; // in static method we can't have $this, cause static method is accesible without object and static is not in object context
        self::$name = "Fuad"; // access static property using self keyword
        self::doSomething(); // access static method using self keyword
        echo "Fibonacci series upto {$n}\n";
    }

    static function doSomething() {
        echo "Doing something\n";
    }

    function fact( $n ) {
        $this->number = 10;
        // $this->name = 10; // This is not valid from non static method. Static property can't be accessed with $this
        self::$name = "Ragib"; // This is ok for static property
        // ways to call static method from non-static method
        self::doSomething();
        $this->doSomething();
        echo "Calculating factorial of {$n}\n";
    }
}

$mc1 = new MathCalculator();
$mc1->fact( 8 );

MathCalculator::fibo( 5 );// without object, static method can be accessed