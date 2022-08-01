<?php
   /* Online PHP Compiler (Interpreter) and Editor */
   $a = 20; // global $a
   
   function x( $b ) {
       $a = 30; // local $a
       global $c, $a; // here $a will come from global scope, not the local $a
       return $c = ( $b + $a );
   }
   
   print x( 40 ) + $c; // output is 120, not 140
?>