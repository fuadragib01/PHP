<?php
/**
 * Scope of method in inheritance
 * 
 * Child class method get most priority.
 */
class ParentClass {
    protected $name; 

    public function __construct( $name ) {
        $this->name = $name;
        $this->sayHi();
    }

    public function sayHi() {
        echo "ParentClass, Hi from {$this->name}\n";
    }
}

class ChildClass extends ParentClass {
    public function sayHi() {
        // to access parent's method from child class
        parent::sayHi();
        echo "ChildClass, Hi from {$this->name}\n";
    }
}

$c1 = new ChildClass( "Fuad" );