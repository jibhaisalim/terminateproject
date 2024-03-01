<?php
session_start();
$cem_id = $_GET['id'];

require ('config1.php');


$sql = "DELETE FROM student WHERE cid={$cem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

$_SESSION['status'] = "Data Deleted Successfully";
header("Location:comittes-editors.php");

mysqli_close($conn);


?>