<?php
session_start();

// $tem_id = $_GET['id'];

require ('config1.php');


if(isset($_POST['delete_stud_image'])){
  
    $tem_id = $_POST['delete_id'];
    $stud_image = $_POST['del_stu_image'];  
  
    $sql = "DELETE FROM gallery WHERE gid={$tem_id}";

    $result = mysqli_query($conn,$sql) or die("Failed");


    unlink("upload/".$stud_image);

    $_SESSION['status'] = "Data Deleted Successfully";
    
    header("Location: patni-sunnat-jamaat-gallery-table.php");

    mysqli_close($conn);

}
?>