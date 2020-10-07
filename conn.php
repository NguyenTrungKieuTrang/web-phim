<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'user';
	
	$conn = new mysqli($servername, $username, $password, $db);
	
	if ($conn->connect_error) {
		die($conn->connect_error);
	}
?>