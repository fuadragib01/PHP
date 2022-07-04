<?php
$x = "2fuad";

// this switch will produce unexpected result
switch( $x ) {
    case "fuad":
        echo "fuad";
        break;
    case 2:
        echo "2";
        break;
    case "2fuad":
        echo "2fuad";
        break;
}

// solution of upper code
echo "\n";
switch( $x ) {
    case (string) "fuad":
        echo "fuad";
        break;
    case (string) 2:
        echo "2";
        break;
    case (string) "2fuad":
        echo "2fuad";
        break;
}
