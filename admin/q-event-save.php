
<?php
session_start();
require ('config1.php');


if(isset($_POST['save_multiple_data'])){
  
    
 $uploadDirectory = 'upload/'; 


 for ($i = 0; $i < count($_POST['committee_id']); $i++) {
  $number = $_POST['committee_id'][$i];
  $title= $_POST ['title'][$i];
  $sponser = $_POST['sponser'][$i]; 
  $address = $_POST['address'][$i]; 
  $date = $_POST['date'][$i];
  $time = $_POST['time'][$i];
  $guest_name = $_POST['guest_name'][$i];
  


  // Handle file uploads
  $filename = $_FILES['uploadfile']['name'][$i];
  $tempFilePath = $_FILES['uploadfile']['tmp_name'][$i];
  $newFilePath = $uploadDirectory . $filename;
  move_uploaded_file($tempFilePath,"upload/".$filename);


        $query = "INSERT INTO even (committee_id,title,sponser,address,date,time,guest_name,filename) VALUES ('$number','$title','$sponser','$address','$date','$time','$guest_name','$filename')";
        $query_run = mysqli_query($conn, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Inserted Successfully";
        header("Location: qamar-free-library-upcoming-event-table.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
         header("Location: qamar-free-library-upcoming-event-table.php");
        exit(0);
    }
}
?>