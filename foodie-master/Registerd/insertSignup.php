<!DOCTYPE html>
<html>

<head>
	<title>Book Table</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "booktable");
		
		
		if($conn === false){
			die("ERROR: Could not connect.". mysqli_connect_error());
		}
		
		
	    $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
		$email = $_REQUEST['email'];
		$city = $_REQUEST['city'];
		$password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];
        
		
		$sql = "INSERT INTO signup_table VALUES ('$firstname','$lastname','$email','$city','$password','$cpassword')";
		
		if(mysqli_query($conn, $sql)){
            echo "you are registerd successfully!!";
			header("location:../index.html");
		} else{
			echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
