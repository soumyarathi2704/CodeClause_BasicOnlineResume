<?php
include('config.php');

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$experience = $_POST['experience'];
$education = $_POST['education'];
$skills = $_POST['skills'];

// Insert resume data into the database
$query = "INSERT INTO resume_table (name, email, phone, experience, education, skills)
          VALUES ('$name', '$email', '$phone', '$experience', '$education', '$skills')";
$result = mysqli_query($conn, $query);

if ($result) {
  echo json_encode(array('message' => 'Resume created successfully'));
} else {
  echo json_encode(array('message' => 'Error creating resume'));
}

mysqli_close($conn);
?>
