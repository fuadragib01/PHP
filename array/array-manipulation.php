<?php

$data = array(
    'Habib',
    'Hasan',
    'Sabbir',
    'Jibon'
);

$length = count( $data );

for ( $i = 0; $i < $length; $i++ ) {
    printf( "%s\n", $data[$i] );
}

// array_pop() -> delete last item from array and return it
$name = array_pop( $data );
printf( "\n%s\n\n", $name );

// after deleting an item by array_pop()
$length = count( $data );
for ( $i = 0; $i < $length; $i++ ) {
    printf( "%s\n", $data[$i] );
}

// srray_shift() -> delete first item from array and return it
$name = array_shift( $data );
printf( "\n%s\n\n", $name );

// after deleting an item by array_shift()
$length = count( $data );
for ( $i = 0; $i < $length; $i++ ) {
    printf( "%s\n", $data[$i] );
}

// Insert data at end of an array
// normal
$data[] = "Djuice";

// after inserting an item at the end normally
$length = count( $data );
for ( $i = 0; $i < $length; $i++ ) {
    printf( "%s\n", $data[$i] );
}

// insert using array_push()
array_push( $data, 'Jahid' );

// after inserting an item at the end normally
$length = count( $data );
for ( $i = 0; $i < $length; $i++ ) {
    printf( "%s\n", $data[$i] );
}

// array_unshift() -> Insert data at start of an array

array_unshift( $data, 'Niloy' );

// after inserting an item at the start
$length = count( $data );
for ( $i = 0; $i < $length; $i++ ) {
    printf( "%s\n", $data[$i] );
}