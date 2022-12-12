<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$employ = $_POST['employ'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$region = $_POST['region'];
		$sql = "UPDATE people SET first_name = '$first_name', last_name = '$last_name', employ= '$employ', dob= '$dob', gender= '$gender', region = '$region', WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select people to edit first';
	}

	header('location: index.php');

?>