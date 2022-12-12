<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$employ = $_POST['employ'];
                $dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$region = $_POST['region'];
		$sql = "INSERT INTO people (first_name, last_name, employ, dob, gender, region) VALUES ('$first_name', '$last_name', '$employ', '$dob', '$gender', '$region')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>