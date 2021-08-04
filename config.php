<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="telemedicine";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(mysqli_select_db($conn,$db)) {
	
}

?>