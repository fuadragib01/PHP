<?php

$path = "E:\\PHP\\file\\text04.txt";

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

// one way to store data: Comma Separated Value(CSV)
/*$fp = fopen( $path, 'w' );
foreach ( $students as $student ) {
    $data = sprintf( "%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll'] );
    fwrite( $fp, $data );
}

// display data
$fp = fopen( $path, 'r' );
while ( $data = fgets( $fp ) ) {
    $student = explode( ',', $data );
    printf( "Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4] );
}*/

// following code is for csv data

// same as last one as it is saving data as csv
/*$fp = fopen( $path, 'w' );
foreach ( $students as $student ) {
    // $data = sprintf( "%s, %s, %s, %s, %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll'] );
    // fwrite( $fp, $data );
    fputcsv( $fp, $student );
}
//display data for csv formate
$fp = fopen( $path, 'r' );
while ( $student = fgetcsv( $fp ) ) {
    // $student = explode( ',', $data );
    printf( "Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4] );
}*/


// Add new data
/*
$new_data = array(
    'fname' => 'Tahmida',
    'lname' => 'Nazia',
    'age' => '21',
    'class' => 'Zoology',
    'roll' => '2459',
);

$fp = fopen( $path, 'a' );
fputcsv( $fp, $new_data );
*/

// Delete a data from file
$data = file( $path );
unset( $data[2] );
print_r( $data );
$fp = fopen( $path, 'w' );
foreach( $data as $line) {
    fwrite( $fp, $line );
}

fclose( $fp );