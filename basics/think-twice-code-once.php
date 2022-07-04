<?php
/*
 * important learning is, a problem can have many solutions,
 * but it depends on best analysis and thinking before 
 * writing code for a particular problem.
 * "Think Twice, Code Once"
 */

// normmal way to find factorial of 1 to x numbers
for ( $x = 1; $x <= 8; $x++ ) {
    $res = 1;
    for ( $y = 1; $y <= $x; $y++ ) {
        $res = $res * $y;
    }
    echo "Factorial of {$x} is {$res}\n";
}

// same output like previous code, but this code is best solution for same task
$res = 1;
for ( $n = 1; $n <= 8; $n++ ) {
    $res *= $n;
    echo "Factorial of {$n} is {$res}\n";
}
