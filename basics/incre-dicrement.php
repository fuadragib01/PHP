<?php

$x = 10;
$y = 20;

$z = $x++ + $y++;
printf("%d + %d = %d\n", $x, $y, $z);

$x = 10;
$y = 20;

$z = ++$x + ++$y;
printf("%d + %d = %d\n", $x, $y, $z);

$x = 12;

$z = ++$x + $x-- - $x;
printf("%d\n",$z);