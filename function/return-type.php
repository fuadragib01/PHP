<?php
/**
 * function with fixed return type
 */
function isEven( $num ):bool {
	if ( $num % 2 === 0 ) {
		return true;
	}
	return false;
}

$x = 11;
if ( isEven( $x ) ) {
	echo "$x is even\n";
} else {
	echo "$x is odd\n";
}