<?php

$x = [
    'phone' => 'samsung, nokia, iphone, walton, oppo, sony, mi',
    'math' => 'arithmatic, algebra, geometry, calculus, discrete math',
    'p-lang' => 'c, c++, java, python, php, javascript, c#, swift'
];

foreach ( $x as $key => $value ) {
    echo "{$key} => {$value}\n";
}
foreach ( $x as $value ) {
    echo "{$value}\n";
}

$keys = array_keys( $x );
print_r ( $keys );
for ( $i = 0; $i < count( $keys ); $i++ ) {
    $key = $keys[$i];
    echo $x[$key] . "\n";
}
$values = array_values( $x );
print_r ( $values );
for ( $i = 0; $i < count( $values ); $i++ ) {
    $value = $values[$i];
    echo $value . "\n";
}


