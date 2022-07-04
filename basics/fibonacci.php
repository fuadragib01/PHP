<?php
/**
 * program to print fibonacci numbers
 */
$num1 = 0;
$num2 = 1;
$new = $num1 + $num2;

for ( $i = 1; $i <= 10; $i++ ) {
    echo $num1 . " ";
    $num1 = $num2;
    $num2 = $new;
    $new = $num1 + $num2;
}
