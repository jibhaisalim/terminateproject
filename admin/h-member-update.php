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
     $extensions = array("jpeg","jpg","png","JPG","PNG");

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


$mem_id = $_POST['member_id'];
$mam_name = $_POST ['name'];
$mam_contact = $_POST ['contact'];
$mam_year = $_POST ['year'];
$mam_designation = $_POST ['designation'];

// $filename = $_FILES["uploadfile"]["name"];
// $tempname = $_FILES["uploadfile"]["tmp_name"];
// $target_dir = "./upload/" . $filename; 


$sql ="UPDATE members SET name='{$mam_name}',contact='{$mam_contact}',year='{$mam_year}',designation='{$mam_designation}',filename='{$filename}' WHERE  member_id ='{$mem_id}'";


$result = mysqli_query($conn,$sql) or die("Failed");

header("Location: patni-housing-society-committee-members-table.php");


mysqli_close($conn);



?>