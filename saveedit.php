<html>
<head>
<title>Save</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="stylesaveedit.css" rel="stylesheet" type="text/css" />
</head>
<body>
	
<!-- Navbar (sit on top) -->
	<div class="w3-top">
	<div class="w3-bar w3-white w3-card" id="myNavbar">
	<a href="#home" class="w3-bar-item w3-button w3-wide"><img  src="image/logo.png" alt="me" width="90" height="25" ></a>

    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="adminedit.php" onclick="w3_close()" class="w3-bar-item w3-button ">BACK</a>
	  <a href="logout.php" class="w3-bar-item w3-button w3-black"><i></i> LOG OUT</a>
      
    </div>

    </div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="adminedit.php" onclick="w3_close()" class="w3-bar-item w3-button ">BACK</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-black">LOG OUT</a>
</nav>

<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

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

	$sql = "UPDATE package SET 
	price='".$_POST["price"]."',
	max_member='".$_POST["max_member"]."',
  startdate='".$_POST["startdate"]."',
  enddate='".$_POST["enddate"]."'
	 WHERE ID ='".$_GET["id"]."'";

	$query = mysqli_query($conn,$sql);

	if($query) {
	 echo "Record update successfully";
	}

	mysqli_close($conn);
?>
<br>
<br>
<br>
<!--Show data-->

<div class="container" style="width:95%;" id="datatable">
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

    
    $sql = "SELECT * FROM Package ORDER BY id";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
    
    ?>
    
    <div class="col-xs-3" style="text-align: center;">


    
    <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>  </th>
        <th> ID </th>
        <th> Tour Name </th>
        <th> Country </th>
        <th> Start date </th>
        <th> End date </th>
        <th> Price </th>
        <th> Member </th>
        <th> Edit </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>
  
        <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["tourname"]; ?></td>
      <td><?php echo $row["country"]; ?></td>
      <td><?php echo $row["startdate"]; ?></td>
      <td><?php echo $row["enddate"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["max_member"]; ?></td>
      <td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
    </tr>
    </tbody>
  
  <?php } ?>
  </table>
    <br>
      
      <?php } else { ?>      
      <?php } ?>

        </form> 
        </div>
      
    </div>
  </div>
</body>
</html>