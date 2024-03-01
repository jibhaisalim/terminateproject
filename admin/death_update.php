<?php

require ('config1.php');

if (isset($_POST['save_multiple_data'])) {

    $birt_id = $_POST['de_id'];
    $dname = $_POST['dname']; 
    $fname = $_POST['fname']; 
    $gname =  $_POST['gname']; 
    $surname = $_POST['surname']; 
    $age = $_POST['age']; 
    $address =  $_POST['address']; 
    $daddress = $_POST['daddress'];  
    $ddate = $_POST['ddate']; 
    $bplace = $_POST['bplace']; 
    $ppan = $_POST['ppan']; 




$sql ="UPDATE deathregi SET de_id='{$birt_id}',dname='{$dname}',fname='{$fname}',gname='{$gname}',surname='{$surname}',age='{$age}',
address='{$address}',daddress='{$daddress}',ddate='{$ddate}',bplace='{$bplace}',ppan='{$ppan}' WHERE  de_id='{$birt_id}'";

$result = mysqli_query($conn,$sql);

 

if($result)
    {
        $_SESSION['status'] = "Form Updatetd Successfully";
        header("Location: death_table.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Form Not Update ";
         header("Location: death_table.php");
        exit(0);
    }

mysqli_close($conn);

}

?>