<?php

$val1 = 1;
$val2 = 2;

$x = function () use ( $val1, $val2 ) {
    echo $val1;
    echo "\n";
    echo $val2;
};

$x();