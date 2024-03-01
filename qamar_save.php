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


$fullname = mysqli_real_escape_string($conn, $_POST['fullname']); 
$address = mysqli_real_escape_string($conn, $_POST['address']); 
$number = mysqli_real_escape_string($conn, $_POST['number']); 
$ppan = mysqli_real_escape_string($conn, $_POST['ppan']); 
$member_ppan = mysqli_real_escape_string($conn, $_POST['member_ppan']);


$query = "INSERT INTO qamar (fullname, address, number, ppan, member_ppan, filename)
VALUES ('$fullname', '$address','$number','$ppan','$member_ppan','$file_name')";

// $result = mysqli_query($conn,$query) or die("Failed");
$result = mysqli_query($conn, $query);



if($result)
    {
        $_SESSION['status'] = "Form Submited Successfully";
        header("Location: qamar_membership.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Form Not Submited ";
         header("Location: qamar_membership.php");
        exit(0);
    }




mysqli_close($conn);
  
}
?>