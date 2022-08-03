<?php

$a = [
    'fname' => 'Fahad',
    'lname' => 'Nasif',
    'class' => '8',
    'roll' => 2351,
    'section' => 'B'
];

print_r( $a );

printf("%s %s\n", $a['fname'], $a['lname']);

// This are not easily managable
$arrayToString = join( $a );
echo $arrayToString;
$arrayToString = join( ', ',$a );
echo $arrayToString;

// Here comes serialize and json
// serialize and unserialize
$serializedArray = serialize( $a );
echo $serializedArray;

$arrayFromSerialize = unserialize( $serializedArray );
print_r( $arrayFromSerialize );

// json_encode and json_decode
$encodedArray = json_encode( $a, );
echo $encodedArray;

$jsonToArray = json_decode( $encodedArray, true ); // without 2nd param, it will return object
print_r( $jsonToArray );
