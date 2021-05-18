<?php

session_start();
//include_once 'dbconnect.php';
$servername = "127.0.0.1:52974";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "tourpackage";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_SESSION['username'])!="") {
	header("Location: adminsignin.php");
}

$username = $_POST['username'];
$password = $_POST['password'];
$res = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
$row = mysqli_fetch_array($res);
if($row['password']==$password) {
	$_SESSION['username']=$row['username'];
	header("Location: adminedit.php");
} else {
	//echo "Error: " . $sql . ":-" . mysqli_error($conn);
	header("Location: adminsignin.php");
    }
     mysqli_close($conn);
?>