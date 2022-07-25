<?php

class A {
    // static $name; // This is public
    // private static $name;
    protected static $name;
    static function sayHi() {
        echo "Hello from A\n";
        self::$name = "Fuad Ragib\n";
    }
}

class B extends A {
    static function sayHi() {
        parent::sayHi();
        echo "Hello from B\n";
        echo parent::$name;// this is not valid when $name is parivate
    }
}

B::sayHi();
// echo B::$name; // This is valid when $name is public