<?php
include('config.php');

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$experience = $_POST['experience'];
$education = $_POST['education'];
$skills = $_POST['skills'];

// Update resume data in the database
$query = "UPDATE resume_table SET name='$name', email='$email', phone='$phone', experience='$experience', education='$education', skills='$skills'";
$result = mysqli_query($conn, $query);

if ($result) {
  echo json_encode(array('message' => 'Resume updated successfully'));
} else {
  echo json_encode(array('message' => 'Error updating resume'));
}

mysqli_close($conn);
?>
