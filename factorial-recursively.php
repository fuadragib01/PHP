<?php

/*
 * A recursive function to find factorial of a number.
 * @param Integer $x
 * @return Integer
 */
function calcFsactorial( $x ) {

	if ( $x == 0 ) { // Base case
		return 1;
	}
	return $x * calcFsactorial( $x - 1 ); // Recursive call

}

$num = 4; // Number to find the factorial
$result = calcFsactorial( $num ); // Calling calcFsactorial function
printf( "Factorial of %d is %d", $num, $result ); // Printing the result
