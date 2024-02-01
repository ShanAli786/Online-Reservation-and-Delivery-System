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
		
		
	    $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
		
		
		$sql = "INSERT INTO login_page VALUES ('$username','$password')";
		
		if(mysqli_query($conn, $sql)){
			header("location:..\index.html");
		} else{
			echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
