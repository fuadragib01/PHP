<?php
/**
 * Unlimited arguments
 * variables before int ...$nums is ok,
 * but, variables after int ...$nums will not work
 */
function sum( int ...$nums ):int {
	$total = count( $nums );
	$res = 0;
	for ( $i = 0; $i < $total; $i++ ) {
		$res += $nums[$i];
	}
	return $res;
}

echo sum( 1,2,3,4,5 );