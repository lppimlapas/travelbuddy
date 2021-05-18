<?php
    
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

session_start();

if(isset($_POST['submit']))
{    
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirm_password = $_POST['confirm_password'];
     
     $sql = "INSERT INTO member (username, email, password, confirm_password)
     VALUES ('$username','$email','$password','$confirm_password')";

     if (mysqli_query($conn, $sql)) {
         $last_id = $conn->insert_id;
         $_SESSION['username'] = $username;
         header("Location: tourpackage_loggedin.php");
         //echo "New record has been added successfully !". $last_id;
     }
     else 
     {
         header("Location: signin.php");
         //echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>