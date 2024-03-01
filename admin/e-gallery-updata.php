<?php
            
require ('config1.php');


if(empty($_FILES['uploadfile']['name'])){
	$filename = $_POST['old_image'];

}else{
  $errors = array();

     $filename = $_FILES['uploadfile']['name'];
     $file_size = $_FILES['uploadfile']['size'];
     $file_tmp = $_FILES['uploadfile']['tmp_name'];
     $file_type = $_FILES['uploadfile']['type'];
     $file_ext = end(explode('.',$filename)); 
     $extensions = array("jpeg","jpg","png");

     if(in_array($file_ext, $extensions) === false)
     {

     	$errors[] ="This extensions file not allowed,Please choose a JPG or PNG file.";
     }

     if($file_size > 7340032){

     	$errors[] ="File size must be 7mb or lower.";


     }
      
     if($file_size > 7340032){

          $errors[] ="File size must be 7mb or lower.";
     }
          $new_name = time()."-".basename($filename);
          $target = "upload/".$new_name;
          $image_name = $new_name;






     if(empty($errors) == true){
          move_uploaded_file($file_tmp,"upload/" .$filename);

     }else{
     	print_r($errors);
     	die();
     }
}


$tem_id = $_POST['gid'];
$number = $_POST['committee_id']; 
$year = $_POST['year']; 



$sql ="UPDATE gallery SET committee_id='{$number}',filename='{$filename}' WHERE  gid='{$tem_id}'";


$result = mysqli_query($conn,$sql) or die("Failed");


header("Location: patni-education-trust-gallery-table.php");


mysqli_close($conn);



?>