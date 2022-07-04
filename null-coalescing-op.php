<?php
/**
 * null-coalescing operator: ??
 * shor form of ternary operator, a feature of php 7++
 */

$default_id = 1;


$user_id = 12;

// $x = isset( $user_id ) ? $user_id : $default_id;
$x = $user_id ?? $default_id;

echo $x;
