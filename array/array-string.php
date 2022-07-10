<?php

$data = 'Fuad, Zawad, Nazia, Fahad';
// explode() -> Convert a string to an array
$data_array = explode( ', ', $data );

echo $data_array[0]."\n";


// join() -> Convert an array to a string
$data_string = join( ', ', $data_array );

echo $data_string."\n";

// problem with explode, it's work only for one delimeter
$data = 'Fuad, Zawad, Nazia, Fahad,Nazia, Ragib';
$data_array = explode( ', ', $data );
echo count( $data_array );

// Solution is preg_split()
$data = 'Fuad, Zawad, Nazia, Fahad,Nazia, Ragib';
$data_array = preg_split( '/, |,/', $data );
echo count( $data_array );

