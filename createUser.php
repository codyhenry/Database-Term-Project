<?php
	include_once 'connect.php';
	include 'methods.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$u_pid = random_num();
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$security = $_POST['security'];

		$sql = "INSERT INTO Users (fname, lname, email, u_pid, password,security)
	VALUES ('$first', '$last', '$email', '$u_pid', '$password', '$security');";
		mysqli_query($conn, $sql);
		
	header("Location: login.php?signup=success");
		
	?>