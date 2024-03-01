<?php
// signup.php

require ('config1.php');

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate form data
// Perform necessary validations based on your requirements

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert user record into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

if (mysqli_query($conn, $sql)) {
    header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
