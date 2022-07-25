<?php

// for php 7.2 or earlier
// function __autoload( $name ) {
//     include "$name.php";
// }

// For 7.2+
function autoload( $name ) {
    include "$name.php";
}
spl_autoload_register( 'autoload' );

( new ConstInClass() )->sayHi();