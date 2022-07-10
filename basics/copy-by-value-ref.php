<?php

$data = "Fuad";

echo $data . "\n";

// copy by value / deep copy
$new_data = $data;
$new_data .= " Ragib";
echo $data . "----" . $new_data . "\n";

function copy_by_value( $data ) {
    $data .= " Changed";
    echo $data . "\n";
}
$x = "Data";
copy_by_value( $x );
echo $x . "\n";


// copy by reference / shallow copy
echo $data . "\n";
$new_data = &$data;
$new_data .= " Ragib";
echo $data . "----" . $new_data . "\n";

function copy_by_reference( &$data ) {
    $data .= " Changed";
    echo $data . "\n";
}
$x = "Data";
copy_by_reference( $x );
echo $x . "\n";