<?php
session_start (); 

$mem_id = $_GET['id'];

require ('config1.php');


$sql = "DELETE FROM even WHERE eid={$mem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

$_SESSION['status'] = "Data Deleted Successfully";

header("Location: patni-sports-upcoming-event-table.php");

mysqli_close($conn);


?>