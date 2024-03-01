<?php
session_start();
require ('config1.php');

if(isset($_POST['submit'])){
    
$sql = "UPDATE contact SET description='{$_POST["description"]}',address='{$_POST["address"]}',phone_number='{$_POST["phone_number"]}',email='{$_POST["email"]}' 
WHERE sid={$_POST["sid"]}";


     $result = mysqli_multi_query($conn,$sql);

    if($result){
      $_SESSION['status'] = "Data Updated Successfully";
      header("Location: patni-sports-contact.php");
  
}else{

	echo "Query Failed";
}
}

?>