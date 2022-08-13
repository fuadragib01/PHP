<?php 

$x = function ( $var ) {
    echo "Hello {$var}\n";
}; // anonymous function will end with a semicolon

$x( "Fuad" );

$message = 'Hi';
$say = function () use ( &$message ) {
	$message = 'Hello';
	echo $message;
};

$say2 = function () use ( $message ) {
    $message = "Hello";
    echo $message;
};

// call by value
$say2();
echo $message;

// call by reference
$say();
echo $message;