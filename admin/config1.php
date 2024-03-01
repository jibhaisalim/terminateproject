<?php
// $hostname ="http://localhost/Terminate";

// Establish database connection
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'jamaat';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>