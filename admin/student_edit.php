<?php
            
require ('config1.php');


if(empty($_FILES['uploadfile']['name'])){
	$filename = $_POST['old_image'];
     
}else{
  $errors = array();

     $file_name = $_FILES['uploadfile']['name'];
     $file_size = $_FILES['uploadfile']['size'];
     $file_tmp = $_FILES['uploadfile']['tmp_name'];
     $file_type = $_FILES['uploadfile']['type'];
     $file_name = str_replace(array(',',' '),'',$file_name);
  $file_ext = explode('.',$file_name);
  $file_ext = strtolower(end($file_ext));
  $extensions = array("jpeg","jpg","png");
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


$stud_id = $_POST['stu_id'];
$sname = $_POST['sname']; 
$fname = $_POST['fname']; 
$surname =  $_POST['surname']; 
$email =  $_POST['email']; 
$number =  $_POST['number']; 
$fathername =  $_POST['fathername']; 
$address =  $_POST['address']; 
$schoolname = $_POST['schoolname'];  
$higher = $_POST['higher']; 
$tmark = $_POST['tmark']; 
$omark = $_POST['omark']; 
$ppan = $_POST['ppan']; 




$sql ="UPDATE student SET sname='{$sname}',fname='{$fname}',surname='{$surname}',email='{$email}',number='{$number}',
fathername='{$fathername}',address='{$address}',schoolname='{$schoolname}',higher='{$higher}',tmark='{$tmark}',
omark='{$omark}',ppan='{$ppan}',filename='{$file_name}' WHERE  stu_id='{$stud_id}'";



$result = mysqli_query($conn,$sql) or die("Failed");

//  header("Location:student-table.php");
//header("Location: birthreg.php");

 header("Refresh:0; url=student-table.php");


mysqli_close($conn);

}

?>