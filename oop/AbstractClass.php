<?php

abstract class Shape {
    abstract protected function calculateArea();
    abstract public function getArea();
}

class Circle extends Shape {
    private $radius;
    private $area;

    public function __construct( $r ) {
        $this->radius = $r;
        $this->calculateArea();
    }

    protected function calculateArea() {
        $this->area = 3.1416 * $this->radius * $this->radius;
    }

    public function getArea() {
        return $this->area;
    }
}

$c1 = new Circle( 5 );
echo "Area of circle is " . $c1->getArea() . "\n";