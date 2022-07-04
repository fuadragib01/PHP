<?php
/**
 * type hinting in function
 */

// don't handle the data type
function factorial_1( $num ) {
	$res = 1;
	for ( $i = 2; $i <= $num; $i++ ) {
		$res *= $i;
	}
	return $res;
}

// handle data type for php 5.6 or less
function factorial_2( $num ) {
	if ( gettype( $num ) !== 'integer' ) {
		return "invalid";
	}
	$res = 1;
	for ( $i = 2; $i <= $num; $i++ ) {
		$res *= $i;
	}
	return $res;
}

// using type hint feature of php 7+
function factorial_3( int $num ) {
	$res = 1;
	for ( $i = 2; $i <= $num; $i++ ) {
		$res *= $i;
	}
	return $res;
}


// problem without type hinting
$num = 7;
echo "Factorial of {$num} = " . factorial_1( $num );
echo "\n";

// solution for php 5.6 or less
$num = 7;
echo "Factorial of {$num} = " . factorial_2( $num );
echo "\n";

// solution for php 7 or upper
$num = 7;
echo "Factorial of {$num} = " . factorial_3( $num );
echo "\n";