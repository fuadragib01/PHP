<?php

$filePath = "E:\\PHP\\file\\text05.txt";

$students = array(
    array(
        'fname' => 'Fuad',
        'lname' => 'Ragib',
        'age' => '30',
        'class' => 'CSE',
        'roll' => '2259',
    ),
    array(
        'fname' => 'Zawad',
        'lname' => 'Nazib',
        'age' => '26',
        'class' => 'English',
        'roll' => '2345',
    ),
    array(
        'fname' => 'Fahad',
        'lname' => 'Nasif',
        'age' => '15',
        'class' => '8',
        'roll' => '2351',
    ),
);

// Data insert
// $data = serialize( $students );
// file_put_contents( $filePath, $data, LOCK_EX );

// Read
$data = file_get_contents( $filePath );
$unserialized_data = unserialize( $data );
print_r( $unserialized_data );

// Delete
// $data = file_get_contents( $filePath );
// $unserialized_data = unserialize( $data );
// unset( $unserialized_data[1] );
// $data = serialize( $unserialized_data );
// file_put_contents( $filePath, $data, LOCK_EX );

// Insert new item
$new_data = array(
    'fname' => 'Tahmida',
    'lname' => 'Nazia',
    'age' => '21',
    'class' => 'Zoology',
    'roll' => '2459',
);
// $data = file_get_contents( $filePath );
// $unserialized_data = unserialize( $data );
// array_push( $unserialized_data, $new_data );
// $data = serialize( $unserialized_data );
// file_put_contents( $filePath, $data, LOCK_EX );
