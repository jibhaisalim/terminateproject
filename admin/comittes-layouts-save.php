<?php



if (isset($_POST['submit'])) {

    $file_name = $_FILES ['uploadfile']['name'];
    $file_size = $_FILES ['uploadfile']['size'];
    $file_tmp = $_FILES ['uploadfile']['tmp_name'];
    $file_type = $_FILES ['uploadfile']['type'];  
    $file_ext = end(explode('.',$file_name));

    $extensions = array("jpeg","jpg","png","JPEG","JPG","PNG");
   
   
   if(in_array($file_ext,$extensions) === false)
   {
     $errors[]= "This extension file not allowed,please choose a jpg Or png file";
   } 
   
   if($file_size > 7097152){
     $errors[] = "File size must be 5mb or lower";
   
   }
       
   if(empty($errors) == true){
     move_uploaded_file($file_tmp,"upload/".$file_name);
   }else{
      print_r($errors);
      die();
      }
   
 $cname = $_POST['cname']; 
 $description = $_POST['description']; 



$sql = "INSERT INTO committees (cname,description,filename) VALUES ('{$cname}','{$description}','{$file_name}')";

require ('config1.php');

$result = mysqli_query($conn,$sql) or die("Failed");


header("Location:comittes-editors.php");

mysqli_close($conn);
}
?>