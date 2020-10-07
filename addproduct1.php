<?php
	require_once('conn.php');

	$name = $_POST['name'];
	$description = $_POST['description'];

	$target = "upload/" . $_FILES['fileUpload']['name'];
	move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target);
	
	$sql = "INSERT INTO product(name, description, image) VALUES(?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sss", $name,  $description, $target);
	
	$isOK = $stmt->execute();
	
	$stmt->close();
	$conn->close();
	
	header("Location: movie.php");
?>