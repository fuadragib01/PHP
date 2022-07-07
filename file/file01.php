<?php
echo getcwd();
$path = "E:\\PHP\\file\\text01.txt";
if ( is_readable( $path ) ) {
    $fp = fopen( $path, 'r' );

    // Menually data read and print
    $line = fgets( $fp );
    echo "\n{$line}";
    $line = fgets( $fp );
    echo "{$line}";
    $line = fgets( $fp );
    echo "{$line}";
    $line = fgets( $fp );
    echo "{$line}";

    // Read and print data using loop 
    // This loop will print data where previous print stoped
    while ( $line = fgets( $fp ) ) {
        echo $line;
    }

    // This will not print anything, because previously printed all data,
    // So, file pointer is at the end of the file
    while ( $line = fgets( $fp ) ) {
        echo $line;
    }

    // solution of the problem above
    rewind( $fp ); // this function bring the file pointer to starting point from it's last position
    echo "\n----------\n";
    while ( $line = fgets( $fp ) ) {
        echo $line;
    }

    fseek( $fp, 9 ); // works as rewind, but we can bring file pointer to a particular position
    echo "\n----------\n";
    while ( $line = fgets( $fp ) ) {
        echo $line;
    }

    fseek( $fp, 0, SEEK_END ); // works oposite of rewind, bring file pointer at the end of a file
    echo "\n----------\n";
    while ( $line = fgets( $fp ) ) {
        echo $line;
    }
    fclose( $fp );
    echo "\n\n------\n";

    // More ways to read data, they read all data at once

    $data = file( $path ); // this return all data as array, each line as an element. 
    print_r( $data );
    echo $data[4];

    echo "\n\n------\n";

    $data = file_get_contents( $path ); // This reads all data from file, as it appear in the file.
    echo $data;
}