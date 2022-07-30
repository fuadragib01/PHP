<?php

$to = "ragibfuad@gmail.com";
$from = "mail@example.com";
$subject = "Example mail";
$header = "From: {$from}\r\n";
$body = "Hello,\nHow are you?";

mail( $to, $subject, $body, $header );