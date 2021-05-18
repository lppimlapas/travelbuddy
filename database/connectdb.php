<?php
$servername = "127.0.0.1:52974";
$username = "azure";
$password = "6#vWHD_$";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
