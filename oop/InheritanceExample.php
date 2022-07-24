<?php

class Shape {
    protected $area;

    public function __construct() {
        $this->calculateArea();
    }

    public function getArea() {
        return $this->area;
    }

    protected function calculateArea() {}
}

class Triangle extends Shape {
    private $a, $b, $c;

    public function __construct( $a, $b, $c ) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct();
    }

    protected function calculateArea() {
        $sp = ( $this->a + $this->b + $this->c ) / 2;
        $this->area = sqrt( $sp * ( $sp - $this->a ) * ( $sp - $this->b ) * ( $sp - $this->c ) );
    }
}

class Rectangle extends Shape {
    private $h, $w;

    public function __construct( $h, $w ) {
        $this->h = $h;
        $this->w = $w;
        parent::__construct();
    }

    protected function calculateArea() {
        $this->area = $this->h * $this->w;
    }
}

$t1 = new Triangle( 3, 4, 5 );
echo "Area of triangle is " . $t1->getArea() . "\n";

$r1 = new Rectangle( 3, 4 );
echo "Area of rectangle is " . $r1->getArea() . "\n";