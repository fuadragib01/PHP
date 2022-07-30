<?php

$data = [1, 2, 3, 4, 5];

echo array_reduce( $data, "sum" );

function sum( $oVal, $nVal ) {
    return $oVal + $nVal;
}
echo "\n";

// same task using anonymous function 
echo array_reduce( $data, function( $oVal, $nVal ) {
    return $oVal + $nVal;
});