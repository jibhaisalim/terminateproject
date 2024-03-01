<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['save_multiple_data'])) {

	$file_name = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./upload/" . $file_name;

	$db = mysqli_connect("localhost", "root", "", "jamaat");

	// Get all the submitted data from the form
	$sql = "INSERT INTO ads (filename) VALUES ('$file_name')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header("Refresh:1; url= advertisment_table.php");

	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>
