<?php
// Example from https://www.php.net/manual/en/function.fpassthru.php

// open the file in a binary mode
$name = './images/sampleimage.jpg';
$fp = fopen($name, 'rb');

// send the right headers
header("Content-Type: image/jpg");
header("Content-Length: " . filesize($name));

// dump the picture and stop the script
fpassthru($fp);
exit;
