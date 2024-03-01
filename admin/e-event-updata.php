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

$eve_eid = $_POST['eid'];
$eve_title = $_POST ['title'];   
$eve_sponser = $_POST ['sponser'];   
$eve_address = $_POST ['address'];   
$eve_date = $_POST ['date'];   
$eve_time = $_POST ['time'];
$eve_guest_name = $_POST ['guest_name'];   


$sql ="UPDATE even SET eid='{$eve_eid}',title='{$eve_title}',sponser='{$eve_sponser}',address='{$eve_address}',date='{$eve_date}',time='{$eve_time}',
guest_name='{$eve_guest_name}',filename='{$filename}' WHERE  eid ='{$eve_eid}'";


$result = mysqli_query($conn,$sql) or die("Failed");


header("Location: patni-education-trust-upcoming-event-table.php");


mysqli_close($conn);

?>