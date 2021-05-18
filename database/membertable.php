<?php
$servername = "127.0.0.1:52974";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "tourpackage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Member (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(20) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(50) NOT NULL,
confirm_password VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Member created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>