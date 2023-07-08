<?php
include('config.php');

// Retrieve resume data from the database
$query = "SELECT * FROM resume_table";
$result = mysqli_query($conn, $query);

$resumeData = array();
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $resumeData[] = $row;
  }
}

// Return resume data as JSON response
echo json_encode($resumeData);

mysqli_close($conn);
?>
