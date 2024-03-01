<?php
session_start();
$mem_id = $_GET['id'];

require ('config1.php');


$sql = "DELETE FROM ads WHERE ads_id={$mem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

$_SESSION['status'] = "Data Deleted Successfully";
header("Location: advertisment_table.php");

mysqli_close($conn);


?>