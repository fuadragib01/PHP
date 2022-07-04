<?php

// Use of break in loop
for ( $i = 1; $i < 20; $i++ ) {
    echo $i . " ";
    if ( $i == 10 ) {
        break;
    }
}

echo "\n";

// Use of continue in loop
for ( $i = 1; $i < 20; $i++ ) {
    if ( $i > 10 && $i < 15 ) {
        continue;
    }
    echo $i . " ";
}
