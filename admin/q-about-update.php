<?php
session_start();
require ('config1.php');

if(empty($_FILES['uploadfile']['name'])){
    $file_name = $_POST['old_image']; 
}else{
     
  $errors = array();

  $file_name = $_FILES['uploadfile']['name'];
  $file_size = $_FILES['uploadfile']['size'];
  $file_tmp = $_FILES['uploadfile']['tmp_name'];
  $file_type = $_FILES['uploadfile']['type'];
  $file_ext = end(explode('.',$file_name)); 
  $extensions = array("jpeg","jpg","png","JPG","PNG","JPEG");

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
       $new_name = time()."-".basename($file_name);
       $target = "upload/".$new_name;
       $image_name = $new_name;



  if(empty($errors) == true){
       move_uploaded_file($file_tmp,"upload/" .$file_name);

  }else{
    print_r($errors);
    die();
  }

}         

     $sql = "UPDATE about SET title='{$_POST["title"]}',description='{$_POST["description"]}',filename='{$file_name}' WHERE sid={$_POST["sid"]}";

     $result = mysqli_multi_query($conn,$sql);

    if($result){
      $_SESSION['status'] = "Data Updated Successfully";
      header("Location: qamar-free-library-about.php");
  
}else{

	echo "Query Failed";
}




?>