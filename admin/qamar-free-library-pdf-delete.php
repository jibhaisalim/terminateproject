
<?php
session_start();

$tem_id = $_GET['id'];

require ('config1.php');

$sql = "DELETE FROM report WHERE pid={$tem_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

$_SESSION['status'] = "Data Deleted Successfully";
header("Location: qamar-free-library-report-table.php");

mysqli_close($conn);


?>




