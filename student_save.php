<?php
session_start();
require ('config.php');

if (isset($_POST['save_multiple_data'])) {
    
  $errors= array();
  /* get details of the uploaded file */
  $file_name = $_FILES['uploadfile']['name'];
  $file_size = $_FILES['uploadfile']['size'];
  $file_tmp = $_FILES['uploadfile']['tmp_name'];
  $file_type = $_FILES['uploadfile']['type'];
  $file_name = str_replace(array(',',' '),'',$file_name);
  $file_ext = explode('.',$file_name);
  $file_ext = strtolower(end($file_ext));
  $extensions = array("jpeg","jpg","png","JPG","PNG","JPEG");
  if(in_array($file_ext,$extensions)=== false){
      $errors[]='<div class="alert alert-danger"> extension not allowed, please choose a JPEG or PNG file.</div>';
  }
  if($file_size > 2097152){
      $errors[]='<div class="alert alert-danger">File size must be exactely 2 MB</div>';
  }

       
    if (empty($errors)) {
        move_uploaded_file($file_tmp, "upload/" . $file_name);
    } else {
        print_r($errors);
        die();
    }


$sname = mysqli_real_escape_string($conn, $_POST['sname']); 
$fname = mysqli_real_escape_string($conn, $_POST['fname']); 
$surname = mysqli_real_escape_string($conn, $_POST['surname']); 
$email = mysqli_real_escape_string($conn, $_POST['email']); 
$number = mysqli_real_escape_string($conn, $_POST['number']); 
$fathername = mysqli_real_escape_string($conn, $_POST['fathername']); 
$address = mysqli_real_escape_string($conn, $_POST['address']); 
$schoolname = mysqli_real_escape_string($conn, $_POST['schoolname']);  
$higher = mysqli_real_escape_string($conn, $_POST['higher']); 
$tmark = mysqli_real_escape_string($conn, $_POST['tmark']); 
$omark = mysqli_real_escape_string($conn, $_POST['omark']); 
$ppan = mysqli_real_escape_string($conn, $_POST['ppan']); 
$standard = mysqli_real_escape_string($conn, $_POST['standard']);

$query = "INSERT INTO student (sname, fname, surname, email, number, fathername, address, schoolname, higher, tmark, omark, ppan, filename, standard)
VALUES ('$sname','$fname','$surname', '$email', '$number', '$fathername', '$address', '$schoolname', '$higher', '$tmark' , '$omark', '$ppan', '$file_name', '$standard')";

// $result = mysqli_query($conn,$query) or die("Failed");
$result = mysqli_query($conn, $query);



if($result)
    {
        $_SESSION['status'] = "Form Submited Successfully";
        header("Location: student.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Form Not Submited ";
         header("Location: student.php");
        exit(0);
    }




mysqli_close($conn);
  
}
?>