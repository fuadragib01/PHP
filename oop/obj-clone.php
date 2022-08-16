<?php 

class FavGame {
    public $data;

    function __construct( $data ) {
        $this->data = $data;
    }

    function setData( $data ) {
        $this->data = $data;
    }
}
$ob1 = new FavGame('football');
$ob2 = $ob1;

$ob2->setData('cricket');

print_r($ob1);
print_r($ob2);
// Normal assignment of an object is by reference, which is shallow copy.
// So, we need to use clone keyword to deep copy.
$ob1 = new FavGame('football');
$ob2 = clone $ob1;

$ob2->setData('cricket');

print_r($ob1);
print_r($ob2);