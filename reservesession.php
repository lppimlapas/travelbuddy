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
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $phonenum = $_POST['phonenum'];
     $email = $_POST['email'];
     $numofpeople = $_POST['numofpeople'];
     
     $sql = "INSERT INTO reserved (firstname, lastname, phonenum, email, numofpeople)
     VALUES ('$firstname','$lastname','$phonenum','$email','$numofpeople')";
     $query = mysqli_query($conn,$sql);
     
     if ($query) {
         $last_id = $conn->insert_id;
         $_SESSION['username'] = $username;
         header("Location: tourpackage_loggedin.php");
         //echo "New record has been added successfully !". $last_id;
     }
     else 
     {
         //echo "Error: " . $sql . ":-" . mysqli_error($conn);
         header("Location: index_loggedin.php");
     }
     mysqli_close($conn);
}
?>