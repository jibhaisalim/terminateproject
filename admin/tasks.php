<?php
$filename = 'tasks.txt';

// Check if a task is being added
if (isset($_POST['committee_id']) && isset($_POST['year']) && isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['designation']) && isset($_POST['uploadfile'])   ) {
    $committee_id = $_POST['committee_id'];
    $year = $_POST['year'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $designation = $_POST['designation'];
    $uploadfile = $_POST['uploadfile'];

    // Append tasks to the file
    $numTasks = count($commite_id);
    for ($i = 0; $i < $numTasks; $i++) {
        $committee_id = $commite_id[$i];
        $year = $years[$i];
        $name = $names[$i];
        $contact = $contacts[$i];
        $designation = $designation[$i];
        $uploadfile = $uploadfile[$i];


        file_put_contents($filename, $committee_id . ',' . $year . ',' . $name . ',' . $contact . ',' . $designation . ',' .$uploadfile  PHP_EOL, FILE_APPEND);
    }
}

// Read tasks from the file
$lines = file($filename, FILE_IGNORE_NEW_LINES);

// Generate the HTML for the task list
$html = '';
foreach ($lines as $line) {
    list($committee_id,$year,$name, $contact,$designation,$uploadfile) = explode(',', $line);
    $html .= '<li>' . $committee_id . ' (Year: ' . $year . '),(Name: ' . $name . '),(Contact: ' . $contact . '),(Designation: ' . $designation . '),(Uploadfile: ' . $uploadfile . ') </li>';
}

echo $html;

?>
