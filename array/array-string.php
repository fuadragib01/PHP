<?php

$data = 'Fuad, Zawad, Nazia, Fahad';
// explode() -> Convert a string to an array
$data_array = explode( ', ', $data );

echo $data_array[0]."\n";

// Here preg_split() will go

// join() -> Convert an array to a string
$data_string = join( ', ', $data_array );

echo $data_string."\n";

