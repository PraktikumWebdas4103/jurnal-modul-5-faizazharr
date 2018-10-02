<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "latihan";

	$conn = new mysqli($hostname,$username,$password,$db);

	if ($conn->connect_error) {
		die("Connection failed: ".$conn->connect->error);
	}
?>