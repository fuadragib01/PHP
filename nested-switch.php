<?php
$n = 13;
$r = $n % 2;

switch( $r ) {
    case 0; // : or ; both is ok here
        switch( $n ) {
            case $n > 0;
                echo "$n is a positive even number";
                break;
            case $n < 0;
                echo "$n is a negative even number";
        }
        break;
    default; // : or ; both is ok here 
        switch( $n ) {
            case $n > 0;
                echo "$n is a positive odd number";
                break;
            case $n < 0;
                echo "$n is a negative odd number";
        }
        break;
}

// Equivalent code of upper one
echo "\n";
switch( true ) {
    case ( 0 == $r && $n > 0 ):
        echo "$n is a positive even number";
        break;
    case ( 1 == $r && $n > 0 ):
        echo "$n is a positive odd number";
        break;
    case ( 0 == $r && $n < 0 ):
        echo "$n is a negative even number";
        break;
    case ( -1 == $r && $n < 0 ):
        echo "$n is a negative odd number";
        break;
}
