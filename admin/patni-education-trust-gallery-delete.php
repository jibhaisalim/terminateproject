<?php
session_start();

$tem_id = $_GET['id'];

require ('config1.php');

$sql = "DELETE FROM gallery WHERE gid={$tem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

$_SESSION['status'] = "Data Deleted Successfully";

header("Location: patni-education-trust-gallery-table.php");

mysqli_close($conn);


?>