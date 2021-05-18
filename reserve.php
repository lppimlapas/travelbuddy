<?php
session_start();
require 'connectdb2.php';
$conn = Connect();
  if(isset($_SESSION['username'])=="") {
	header("Location: signin.php");
}
?>

<html>
<html lang="en">
<head>

<title>Reserve Tour</title>
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Reservation</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="stylereserve.css" rel="stylesheet" type="text/css" />
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
</br>
</br>

<div ng-app="reserveApp" ng-controller="reserveAppController">
	<div class="reserve-form">
    <form action="reservesession.php" method="post">
		<h2>Reserve your trip. </h2> 
       <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i></i></span>
				<input type="text" class="form-control" id="firstName" name="firstname" placeholder ="Enter your First Name" required="required">
			</div>
        </div>

        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i></i></span>
				<input type="text" class="form-control" id="lastName" name="lastname" placeholder ="Enter your Last Name" required="required">
			</div>
        </div>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i></i></span>
				<input type="text" class="form-control" id="phonenum" name="phonenum" placeholder ="Enter your Phone Number" required="required">
			</div>
        </div>

<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i></i></span>
				<input type="text" class="form-control" id="email" name="email" placeholder ="Enter your E-mail" required="required">
			</div>
        </div>
		
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i></i></span>
				<input type="number" min="1" max="30" class="form-control" id="numofpeople" name="numofpeople" placeholder ="Enter number of people" required="required">
			</div>
        </div>
		
		<div class="form-group">
            <button name="submit" type="submit" onclick="display_alert()" value="submit" class="btn btn-primary btn-lg">Reserve</button>
        </div>
        </form>
        </div>
        </div>
        

 <script type="text/javascript">
    function display_alert()
    {
      alert("Reserved Success!!!! We will call you back within 3 hours.");
    }
 </script>
 
<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('firstName').value.trim())) {
alert('First name is required!');
return false;
}
if (isEmpty(document.getElementById('lastName').value.trim())) {
alert('Last name is required!');
return false;
}
if (isEmpty(document.getElementById('phonenum').value.trim())) {
alert('Phone is required!');
return false;
}
if (isEmpty(document.getElementById('email').value.trim())) {
alert('Email is required!');
return false;
}
if (!validateEmail(document.getElementById('email').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
if (isEmpty(document.getElementById('numofpeople').value.trim())) {
alert('Number of people is required!');
return false;
}
return true;
}

function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>
</body>
</html>