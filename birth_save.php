<?php
session_start();

require ('config.php');

if (isset($_POST['save_multiple_data'])) {
    
$cname = mysqli_real_escape_string($conn, $_POST['cname']); 
$fname = mysqli_real_escape_string($conn, $_POST['fname']); 
$mname = mysqli_real_escape_string($conn, $_POST['mname']); 
$gname = mysqli_real_escape_string($conn, $_POST['gname']); 
$surname = mysqli_real_escape_string($conn, $_POST['surname']); 
$address = mysqli_real_escape_string($conn, $_POST['address']); 
$baddress = mysqli_real_escape_string($conn, $_POST['baddress']);  
$bdate = mysqli_real_escape_string($conn, $_POST['bdate']); 
$ppan = mysqli_real_escape_string($conn, $_POST['ppan']); 

$query = "INSERT INTO birthregi (cname, fname, mname, gname, surname, address, baddress, bdate, ppan)
VALUES ('$cname','$fname','$mname','$gname','$surname','$address','$baddress','$bdate','$ppan')";

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