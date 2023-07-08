<?php
include('config.php');

// Delete resume data from the database
$query = "DELETE FROM resume_table";
$result = mysqli_query($conn, $query);

if ($result) {
  echo json_encode(array('message' => 'Resume deleted successfully'));
} else {
  echo json_encode(array('message' => 'Error deleting resume'));
}

mysqli_close($conn);
?>
