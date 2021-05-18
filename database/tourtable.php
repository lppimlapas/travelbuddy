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
$sql = "CREATE TABLE Package (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tourname VARCHAR(100) NOT NULL,
country VARCHAR(50) NOT NULL,
startdate DATE NOT NULL,
enddate DATE NOT NULL,
price NUMERIC(6) NOT NULL,
max_member NUMERIC(3) NOT NULL,
details VARCHAR(300)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>