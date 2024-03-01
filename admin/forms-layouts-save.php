<?php
session_start();
require ('config1.php');


if(isset($_POST['save_multiple_data'])){
  
    
 $uploadDirectory = 'upload/'; 


 for ($i = 0; $i < count($_POST['committee_id']); $i++) {
  $number = $_POST['committee_id'][$i];
  $year= $_POST ['year'][$i];
  $name = $_POST['name'][$i]; 
  $contact = $_POST['contact'][$i]; 
  $designation = $_POST['designation'][$i];
  


  // Handle file uploads
  $filename = $_FILES['uploadfile']['name'][$i];
  $tempFilePath = $_FILES['uploadfile']['tmp_name'][$i];
  $newFilePath = $uploadDirectory . $filename;
  move_uploaded_file($tempFilePath,"upload/".$filename);


        $query = "INSERT INTO members (committee_id,year,name,contact,designation,filename) VALUES ('$number','$year','$name','$contact','$designation','$filename')";
        $query_run = mysqli_query($conn, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Inserted Successfully";
        header("Location: patni-sunnat-jamaat-committee-members-table.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: patni-sunnat-jamaat-committee-members-table.php");
        exit(0);
    }
}
?>