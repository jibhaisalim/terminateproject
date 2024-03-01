<?php
session_start();
$stud_id = $_GET['id'];

require ('config1.php');


$sql = "DELETE FROM student WHERE stu_id={$stud_id}";

$result = mysqli_query($conn,$sql) or die("Failed");

header("Location:student-table.php");

mysqli_close($conn);


?>