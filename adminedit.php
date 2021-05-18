<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="styleadminedit.css" rel="stylesheet" type="text/css" />

<body>

	<!-- Navbar (sit on top) -->
	<div class="w3-top">
		<div class="w3-bar w3-white w3-card" id="myNavbar">
			<a href="#home" class="w3-bar-item w3-button w3-wide"><img  src="image/logo.png" alt="me" width="90" height="25" ></a>

    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#datatable" onclick="w3_close()" class="w3-bar-item w3-button ">DATA TABLE</a>
  <a href="#add" onclick="w3_close()" class="w3-bar-item w3-button ">ADD</a>
  <a href="#delete" onclick="w3_close()" class="w3-bar-item w3-button ">DELETE</a>
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
  <a href="#add" onclick="w3_close()" class="w3-bar-item w3-button ">ADD</a>
  <a href="#delete" onclick="w3_close()" class="w3-bar-item w3-button ">DELETE</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-black">LOG OUT</a>
</nav>
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
 
 
<!--delete p jew-->
<div class="col-xs-9" id="delete">
    <div class="form-area" style="padding: 0px 100px 100px 100px;border:grey solid 3px;">
        <form action="admindelete.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> DELETE PACKAGE HERE </h3>


<?php

//require 'connection.php';
    //session_start();
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

    //$conn = Connect();
    $sql = "SELECT * FROM Package ORDER BY id";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
  ?>

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
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <input name="checkbox[]" type="checkbox" value="<?php echo $row['id']; ?>"/> </td>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["tourname"]; ?></td>
      <td><?php echo $row["country"]; ?></td>
      <td><?php echo $row["startdate"]; ?></td>
      <td><?php echo $row["enddate"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["max_member"]; ?></td>
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
    <br>
          <div class="form-group">
          <button type="submit" id="submit" name="delete" value="Delete" class="btn btn-danger pull-right"> DELETE</button>    
      </div>

  <?php } else { ?>

  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>

        </form>

        
        </div>
      
    </div>
</div>

<!--ADD p jew-->
<?php

//require 'connection.php';
    //session_start();
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

    //$conn = Connect();
    $sql = "SELECT * FROM Package ORDER BY id";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
  ?>
<div class="col-xs-9" id="add">
      <div class="form-area" style="padding: 0px 100px 100px 100px;border:grey solid 3px;">
        <form action="adminadd.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;" > ADD NEW PACKAGE HERE </h3>

          <div class="form-group" id="overrides1">
            <input type="text" class="form-control" id="tourname" name="tourname" size="80" placeholder="Tour Name" required="">
          </div>  
          
          <div class="form-group" id="overrides1">
            <input type="text" class="form-control" id="country" name="country" size="80" placeholder="Country Of This Package" required="">
          </div>    
          
          <div class="form-group" id="overrides1">
            <input type="text" class="form-control" id="startdate" name="startdate" size="80" placeholder="Start date(YYYY-MM-DD)" required="">
          </div> 

          <div class="form-group" id="overrides1">
            <input type="text" class="form-control" id="enddate" name="enddate" size="80" placeholder="End date(YYYY-MM-DD)" required="">
          </div> 
          
          <div class="form-group" id="overrides1">
            <input type="text" class="form-control" id="price" name="price" size="80" placeholder="Package Price" required="">
          </div>

	  <div class="form-group" id="overrides1">
            <input type="text" class="form-control" id="max_member" name="max_member" size="80" placeholder="Max Member" required="">
          </div>
          <div class="form-group" id="overrides1">
            <input type="text" class="form-control" id="details" name="details" size="80" placeholder="Package Details" required="">
          </div>
          <div class="form-group" id="overrides1">
            <input type="text" class="form-control" id="image_path" name="image_path" size="80" placeholder="Image Path [image/<filename>.<extention>]" required="">
          </div>

          <div class="form-group" >
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" > ADD</button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>
  <?php } ?>




  
</body>
</html>


<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
 <script type="text/javascript">
    function display_alert()
    {
      alert("Data Updated Successfully!!!");
    }
 </script>
      <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
  </script>

</body>
</html>