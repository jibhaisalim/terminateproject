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


$birt_id = $_POST['q_id'];
$fullname =  $_POST['fullname']; 
$address =  $_POST['address']; 
$number =  $_POST['number']; 
$ppan =  $_POST['ppan']; 
$member_ppan =  $_POST['member_ppan'];


$sql ="UPDATE qamar SET fullname='{$fullname}',address='{$address}',number='{$number}',ppan='{$ppan}',member_ppan='{$member_ppan}',filename='{$file_name}' WHERE  q_id='{$birt_id}'";



$result = mysqli_query($conn,$sql) or die("Failed");

//  header("Location:student-table.php");
//header("Location: birthreg.php");

 header("Refresh:0; url= qamar_table.php");


mysqli_close($conn);

}

?>