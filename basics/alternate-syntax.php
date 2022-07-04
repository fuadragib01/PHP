<?php
// switch
$x = "2fuad";

switch( $x ):
    case (string) "fuad":
        echo "fuad";
        break;
    case (string) 2:
        echo "2";
        break;
    case (string) "2fuad":
        echo "2fuad";
        break;
endswitch;

// if .. else
echo "\n";

if ( $n % 2 == 0 ):
    echo "Even";
else:
    echo "Odd";
endif;

echo "\n";

// if ... elseif ... else ...
$n = -11;

if ( $n > 0 ):
    echo "Positive";
elseif ( $n < 0 ):
    echo "Negative";
else:
    echo "Zero";
endif;

echo "\n";

// while

$n = 10;

while ( $n < 15 ):
    echo $n . " ";
    $n++;
endwhile;

echo "\n";

// for

$n = 10;

for( $i = 0; $n < 15; $n++ ):
    echo $n . " ";
endfor;

// foreach

echo "\n";

$n = [1,2,3,4,5];

foreach( $n as $num ):
    echo $num . " ";
endforeach;
