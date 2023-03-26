<?php
$servername = "localhost";
$email = "";
$password = "";
$db_name ="lms";

// Create connection
$conn = new mysqli($servername, $email, $password,);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "ok";
?>

