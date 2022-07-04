<?php
/**
 * default parameter or optional parameter
 */
function sum( int $x = 10, int $y = 12 ) {
	$res =  $x + $y;
	printf( "%d + %d = %d\n", $x, $y, $res );

}

/**
 * when calling a function which have default parameter,
 * sequence of passing argument is very important
 */ 
sum();
$a = 3;
$b = 6;
sum( $a, $b );
sum( 14 );