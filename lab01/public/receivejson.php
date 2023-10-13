<?php
// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);
$method = $_SERVER['REQUEST_METHOD'];
echo "Method: $method<br>\n";
echo "Received JSON<br>\n";
print_r($data);
