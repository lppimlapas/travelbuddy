!DOCTYPE html>
<?php
  session_start();
  if(isset($_SESSION['username'])=="") {
	header("Location: signin.php");
}
?>
  
<html>
<head>
  
<title>Tour Package Logged In</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="styletourpack.css" rel="stylesheet" type="text/css"/>
</head>

<body>  
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><img  src="image/logo.png" alt="me" width="90" height="25" ></a>

    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index_loggedin.html" class="w3-bar-item w3-button"><i class="fa fa-map-pin"></i> HOME</a>
      <a href="tourpackage_loggedin.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> TOUR PACKAGE</a>
      <a href="travelblog_loggedin.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i> TRAVEL BLOG</a>
      <a href="logout.php" class="w3-bar-item w3-button w3-black"> LOG OUT</a>  
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index_loggedin.html" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="tourpackage_loggedin.php" onclick="w3_close()" class="w3-bar-item w3-button">TOUR PACKAGE</a>
  <a href="travelblog_loggedin.html" onclick="w3_close()" class="w3-bar-item w3-button">TRAVEL BLOG</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-black">LOG OUT</a>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:95%;margin-top:5%">
                  
<div class="container" style="width:100%;">
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
      $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
     if ($count == 0)
          echo "<div class='row'>";
    ?>
    
          <div>
          <form method="post" action="reserve.php?id=<?php echo $row["id"]; ?>">
         
            <div class="w3-quarter">
              <img src="<?php echo $row["image_path"]; ?>" style="width:100%">
              
              <h3><b><?php echo $row["tourname"]; ?></b></h4>
              <h5>Country: <?php echo $row["country"]; ?></h5>
              <h5>Start date: <?php echo $row["startdate"]; ?></h5>
              <h5>End date: <?php echo $row["enddate"]; ?></h5>
              <h5>Price: ฿ <?php echo $row["price"]; ?>/person</h5>
              <h5>Details: <?php echo $row["details"]; ?></h5>
              
              <input type="hidden" name="hidden_name" value="<?php echo $row["tourname"]; ?>">
              <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
              
              <input type="submit" name="submit" style="margin-top:5px;" class="btn btn-primary btn-lg" id="btorder" value="Reserve Now!">
              </br>
              </br>
             </div>            
                 
           </form>
          </div>
          
               <?php
          $count++;
          if ($count == 4) 
          {
            echo "</div>";
            $count = 0;
          }
         }
        ?>
  </div>
  </div>
<?php
      }
?>
</div>
</body>
</html>