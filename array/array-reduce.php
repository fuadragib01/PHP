<?php

$data = [1,2,3,4,5,6,7,8,9,10];

function total( $old, $new ) {
    return $old + $new;
}

// passes old or processed value as 1st arg and new value from array as 2nd arg.
$sum = array_reduce( $data, 'total' );
echo $sum . "\n";

function even_total( $old, $new ) {
    if ( $new % 2 == 0) {
        return $old + $new;
    }
    return $old;
}
$sum = array_reduce( $data, 'even_total' );
echo $sum . "\n";