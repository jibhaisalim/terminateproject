<?php
// signin.php
require ('config1.php');

if(isset($_POST['submit'])){

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Fetch user record from database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row['password'];

    // Verify password
    if (password_verify($password, $hashedPassword)) {
        session_start();
        $_SESSION['email'] = $row['email'];
         header("Location: ../admin/pages-login.php");
        // header("Location: pages-login.php");
        } else {
        echo "Invalid email or password.";
    }
} else {
    echo "Invalid email or password.";
}
}
// Close database connection
mysqli_close($conn);
?>