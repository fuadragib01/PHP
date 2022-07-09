<?php

$filePath_ = "E:\\PHP\\file\\text06.txt";

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
// $data = json_encode( $students );
// file_put_contents( $filePath_, $data, LOCK_EX );

// data read, this will bring data as object
$data = file_get_contents( $filePath_ );
$allStudents = json_decode( $data );
print_r( $allStudents );
echo $allStudents[0]->fname;

// data read, this will bring data as array
// $data = file_get_contents( $filePath_ );
// $allStudents = json_decode( $data, true );
// print_r( $allStudents );
// echo $allStudents[0]['fname'];