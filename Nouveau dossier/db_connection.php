<?php
$serverName = "DESKTOP-294RRME";
$connectionOptions = array(
    "Database" => "naftal",
    "Uid" => "moumen",
    "PWD" => "12345"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    // Connection error occurred
    $errors = sqlsrv_errors();
    // Handle the error, log or display an error message
    echo "Database connection error: " . $errors[0]['message'];
    exit;
}



?>
