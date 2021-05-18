<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sign In</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="stylesignin.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Navbar (sit on top) -->
	<div class="w3-top">
		<div class="w3-bar w3-white w3-card" id="myNavbar">
			<a href="#home" class="w3-bar-item w3-button w3-wide"><img  src="image/logo.png" alt="me" width="90" height="25" ></a>

    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.html" class="w3-bar-item w3-button"><i class="fa fa-map-pin"></i> HOME</a>
      <a href="tourpackage.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> TOUR PACKAGE</a>
      <a href="travelblog.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i> TRAVEL BLOG</a>     
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
  <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="tourpackage.php" onclick="w3_close()" class="w3-bar-item w3-button">TOUR PACKAGE</a>
  <a href="travelblog.html" onclick="w3_close()" class="w3-bar-item w3-button">TRAVEL BLOG</a>
</nav>

</br>
</br>
<div class="login-form">    
    <form action="signinadmindb.php" method="post">
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Hi Admin!</h4>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="forgot-link">Forgot Password?</a>
        </div> 
        <input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Login">              
    </form>			


<script src="scriptsignin.js">
	</script>

</body>             
</html>