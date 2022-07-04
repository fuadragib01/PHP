<?php 
/**
 * Determines if a number is positive or negative
 */
function isPositive( $number ) {
	if ( $number >= 0 ) {
		return true;
	}
	return false;
}

$n = 10;

if ( isPositive( $n ) ) {
	echo "$n is a positive number\n";
} else {
	echo "$n is a negative number\n";
}

