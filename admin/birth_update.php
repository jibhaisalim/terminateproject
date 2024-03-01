<?php

require ('config1.php');

if (isset($_POST['save_multiple_data'])) {

    $birt_id = $_POST['bir_id'];
    $cname = $_POST['cname']; 
    $fname = $_POST['fname']; 
    $mname =  $_POST['mname']; 
    $gname = $_POST['gname']; 
    $surname = $_POST['surname']; 
    $address =  $_POST['address']; 
    $baddress = $_POST['baddress'];  
    $bdate = $_POST['bdate']; 
    $ppan = $_POST['ppan']; 




$sql ="UPDATE birthregi SET bir_id='{$birt_id}',cname='{$cname}',fname='{$fname}',mname='{$mname}',gname='{$gname}',surname='{$surname}',
address='{$address}',baddress='{$baddress}',bdate='{$bdate}',ppan='{$ppan}' WHERE  bir_id='{$birt_id}'";


$result = mysqli_query($conn,$sql);
if($result)
    {
        $_SESSION['status'] = "Form Updatetd Successfully";
        header("Location: birth_table.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Form Not Update ";
         header("Location: birth_table.php");
        exit(0);
    }

mysqli_close($conn);

}

?>