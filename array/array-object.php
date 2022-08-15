<?php
$x = (object) ['one'=>[1,2,[9,8,7]], 'two'=>'2', 'three'=>'3'];

var_dump($x);

echo $x->one[2][1];