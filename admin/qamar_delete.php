<?php
session_start();
$mem_id = $_GET['id'];

require ('config1.php');


$sql = "DELETE FROM qamar WHERE q_id={$mem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

$_SESSION['status'] = "Data Deleted Successfully";
header("Location: qamar_table.php");

mysqli_close($conn);


?>