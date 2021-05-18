<html>
<head>
<title>Edit Page</title>
</head>
<link href="styleadminedit.css" rel="stylesheet" type="text/css" />
<body>
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

    $sql = "SELECT * FROM package WHERE ID = '".$_GET["id"]."' ";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);
    if(!$row)
    {
    	echo "Not found id =".$_GET["id"];
    }
    else
    {    
?>
<div class="col-xs-9" id="delete">
    <div class="form-area" style="padding: 0px 100px 100px 100px;border:grey solid 3px;">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> EDIT PACKAGE HERE </h3>
<form action="saveedit.php?id=<?php echo $_GET["id"];?>" name="frmAdd" method="post">
<div class="container">
  <table class="table table-bordered">
    <tr>
      <th scope="col">Price</th>
      <td><input type="text" name="price" size="20"  placeholder="Package Price" required=""></td>
      </tr>
    <tr>
      <th scope="col">Max Member</th>
      <td><input type="text" name="max_member" size="15"  placeholder="Max Member" required=""></td>
      </tr>
      <tr>
      <th scope="col">Startdate</th>
      <td><input type="text" name="startdate" size="30"  placeholder="Start date(YYYY-MM-DD)" required=""></td>
      </tr>
      <tr>
      <th scope="col">Enddate</th>
      <td><input type="text" name="enddate" size="30"  placeholder="End date(YYYY-MM-DD)" required=""></td>
      </tr>
  </table>
  <input type="submit" name="submit" value="submit" class="btn btn-primary pull-right">
</form>
</div>
</div>
</div>
<?php
  }
   mysqli_close($conn);
?>
</body>
</html>