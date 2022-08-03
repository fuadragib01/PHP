<?php

// deep copy or copy by value
$x = [
    'greet' => 'Hello',
    'name' => 'Fuad'
];

$y = $x;

$y['name'] = 'Ragib';

print_r( $x );
print_r( $y );

function abc( $a ) {
    $a = 10;
    echo $a;
}
$b = 20;
abc( $b );
echo $b . "\n";

// shallow copy or copy by reference 
$z = &$x;

$z['name'] = 'Ragib';
print_r( $x );
print_r( $z );

function abc2( &$a ) {
    $a = 10;
    echo $a;
}
$b = 20;
abc2( $b );

echo $b;