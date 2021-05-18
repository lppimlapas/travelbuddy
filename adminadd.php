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

    //$conn = Connect();
    $sql = "SELECT * FROM Package ORDER BY id";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
$tourname = $conn->real_escape_string($_POST['tourname']);
$country = $conn->real_escape_string($_POST['country']);
$startdate = $conn->real_escape_string($_POST['startdate']);
$enddate = $conn->real_escape_string($_POST['enddate']);
$price = $conn->real_escape_string($_POST['price']);
$max_member = $conn->real_escape_string($_POST['max_member']);
$details = $conn->real_escape_string($_POST['details']);
$image_path = $conn->real_escape_string($_POST['image_path']);
$query = "INSERT INTO Package(tourname,country,startdate,enddate,price,max_member,details,image_path) VALUES('" . $tourname . "','" . $country . "','" . $startdate . "','" . $enddate . "','" . $price . "','" . $max_member . "','" . $details . "','" . $image_path . "')";
$success = $conn->query($query);

if ($success){
  echo "SUCCESS";
	header('Location: adminedit.php');
	
}
$conn->close();
?>
<?php } ?>



