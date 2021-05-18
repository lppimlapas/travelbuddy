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
$cheks = implode("','", $_POST['checkbox']);
$sql = "DELETE FROM package WHERE id in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('Location: adminedit.php');
$conn->close();
?>
<?php } ?>