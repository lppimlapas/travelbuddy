<?php

function Connect()
{
	$servername = "127.0.0.1:52974";
    $username = "azure";
    $password = "6#vWHD_$";
	$dbname = "tourpackage";

	//Create Connection
	$conn = new mysqli($servername, $username, $password, $dbname) or die($conn->connect_error);

	return $conn;
}
?>
