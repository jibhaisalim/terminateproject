<?php
session_start();

// $tem_id = $_GET['id'];

require ('config1.php');

if(isset($_POST['delete_stud_image'])){
  
    $tem_id = $_POST['delete_id'];
    $stud_image = $_POST['del_stu_image']; 

$sql = "DELETE FROM report WHERE pid={$tem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

unlink("rpdf/".$stud_image);

$_SESSION['status'] = "Data Deleted Successfully";

header("Location: patni-sunnat-jamaat-pdf-table.php");

mysqli_close($conn);

}
?>