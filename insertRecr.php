

<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "population_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id=$_GET['id'];
	        
		$name = $_REQUEST['name'];
		$position = $_REQUEST['position'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
   		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO recreut_tb VALUES ('$id','$name',
			'$position','$email','$password')";
		
		if(mysqli_query($conn, $sql)){
			
                        echo "Successfull";
			
		} else{
			echo "ERROR:  Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
