<?php

$path = "E:\\PHP\\file\\text03.txt";

// this will delete previous data
file_put_contents( $path, "Fuad\n" );
file_put_contents( $path, "Ragib\n" );

// FILE_APPEND to prevent previous data deletion
file_put_contents( $path, "Fahad\n", FILE_APPEND );
file_put_contents( $path, "Nasif\n", FILE_APPEND );

// Handle race condition, but will delete previous data
file_put_contents( $path, "Fahad\n", LOCK_EX );
file_put_contents( $path, "Nasif\n", LOCK_EX );

// solution of last arised problem
file_put_contents( $path, "Zawad\n", FILE_APPEND | LOCK_EX );
file_put_contents( $path, "Nazib\n", FILE_APPEND | LOCK_EX );
