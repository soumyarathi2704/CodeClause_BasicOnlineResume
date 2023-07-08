<?php
// Database configuration
$hostname = 'localhost';
$username = 'soumya.rathi2021@vitstudent.ac.in';
$password = 'soumyA@27';
$database = 'resume';

// Create a database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
?>
