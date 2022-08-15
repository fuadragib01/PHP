<?php
// find gcd
function magic( $p, $q ) {
    return ( $q == 0 ) ? $p : magic( $q, $p % $q );
}

echo magic( 10, 20 );

$x = 0;
$y = "sohomot";
// string comparison with 0 treats the string as 0. so, here output is some
if ( $x == $y ) {
    echo "Some";
} else {
    echo "another";
}