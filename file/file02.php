<?php

$path = "E:\\PHP\\file\\text02.txt";
if ( is_writable( $path ) ) {
    $fp = fopen( $path, 'w' );
    fwrite( $fp, "Fuad Ragib\n" );

    // problems in 'w' mode
    // this will delete all previous data from file, and will write only new data to the file
    fwrite( $fp, "Fahad Nasif\n" );
    fwrite( $fp, "Zawad Nazib\n" );

    // Solution temporary

    $data = file_get_contents( $path );
    fwrite( $fp, $data );
    fwrite( $fp, "Abduz Zaher\n" );

    // another solution 

    // Open file in append 'a' mode
    $fp = fopen( $path, 'a' );
    fclose( $fp );
}