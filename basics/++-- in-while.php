<?php
/**
 * ++ and -- in while loop is very scensetive
 * need to be very careful when handle it
 */

$j = 1;

while ( ++$j < 10 ) {
    echo $j . " ";
}

echo "\n";

$j = 1;

while ( $j++ < 10 ) {
    echo $j . " ";
}
