<?php
session_start();

require ('config.php');

if (isset($_POST['save_multiple_data'])) {
    
$dname = mysqli_real_escape_string($conn, $_POST['dname']); 
$fname = mysqli_real_escape_string($conn, $_POST['fname']); 
$gname = mysqli_real_escape_string($conn, $_POST['gname']); 
$surname = mysqli_real_escape_string($conn, $_POST['surname']); 
$age = mysqli_real_escape_string($conn, $_POST['age']); 
$address = mysqli_real_escape_string($conn, $_POST['address']); 
$daddress = mysqli_real_escape_string($conn, $_POST['daddress']);  
$ddate = mysqli_real_escape_string($conn, $_POST['ddate']); 
$bplace = mysqli_real_escape_string($conn, $_POST['bplace']); 
$ppan = mysqli_real_escape_string($conn, $_POST['ppan']); 

$query = "INSERT INTO deathregi (dname, fname, gname, surname, age,address, daddress, ddate,bplace,ppan)
VALUES ('$dname','$fname','$gname','$surname','$age','$address','$daddress','$ddate','$bplace','$ppan')";

// $result = mysqli_query($conn,$query) or die("Failed");
$result = mysqli_query($conn, $query);



if($result)
    {
        $_SESSION['status'] = "Form Submited Successfully";
        header("Location: birthreg.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Form Not Submited ";
         header("Location: birthreg.php");
        exit(0);
    }

mysqli_close($conn);
  
}
?>