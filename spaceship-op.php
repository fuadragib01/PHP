<?php
/**
 * spaceship operator: <=>
 * if left operand is greater than right operand, return 1
 * if left operand is equal to right operand, return 0
 * if left operand is less than right operand, return -1
 */

$x = 20;
$y = 20;

$chk = $x <=> $y;

if ( $chk == 1 ) {
    echo "$x is greater than $y";
} elseif ( $chk == 0 ) {
    echo "$x is equal to $y";
} elseif ( $chk == -1 ) {
    echo "$x is less than $y";
} 
