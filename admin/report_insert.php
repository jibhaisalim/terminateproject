<?php
session_start();
require ('config1.php');


if(isset($_POST['save_multiple_data'])){
  
    
 $uploadDirectory = 'rpdf/'; 


 for ($i = 0; $i < count($_POST['committee_id']); $i++) {
  $number = $_POST['committee_id'][$i];
  $year= $_POST ['year'][$i];
  

  // Handle file uploads
  $filename = $_FILES['uploadfile']['name'][$i];
  $tempFilePath = $_FILES['uploadfile']['tmp_name'][$i];
  $newFilePath = $uploadDirectory . $filename;
  move_uploaded_file($tempFilePath,"rpdf/".$filename);


        $query = "INSERT INTO report (committee_id,year,filename) VALUES ('$number','$year','$filename')";
        $query_run = mysqli_query($conn, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Inserted Successfully";
        header("Location: patni-sunnat-jamaat-pdf-table.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: patni-sunnat-jamaat-pdf-table.php");
        exit(0);
    }
}
?>