<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "jamaat";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>