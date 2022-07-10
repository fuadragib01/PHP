<?php
$x = "Nazia";
// Heredoc -> Heredoc strings are like double-quoted strings without escaping.
$data = <<<FR
fuad
ragib
fahad nasif
zawad nazib\n$x\n
FR;

echo $data;

// Nowdoc -> Nowdoc strings are like single-quoted strings without escaping.
$y = <<<'FR'
\nit will 
not 
display the value of a variable
it's works like single quoted string
FR;

echo $y;