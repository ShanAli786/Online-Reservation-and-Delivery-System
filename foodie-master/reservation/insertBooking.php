<!DOCTYPE html>
<html>

<head>
	<title>Book Table</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheet.css">
    <script src="https://kit.fontawesome.com/91d0125610.js" crossorigin="anonymous"></script>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "booktable");
		
		
		if($conn === false){
			die("ERROR: Could not connect.". mysqli_connect_error());
		}
		
		$id = &$_REQUEST['id'];
	    $name = $_REQUEST['name'];
        $country = $_REQUEST['country'];
		$date = $_REQUEST['date'];
		$time = $_REQUEST['time'];
		$email = $_REQUEST['email'];
		$phone_no = $_REQUEST['phone_no'];
        $persons = $_REQUEST['persons'];
        
		
		$sql = "INSERT INTO book_table VALUES ('$id','$name','$country','$date','$time','$email','$phone_no','$persons')";
		
		if(mysqli_query($conn, $sql)){
			

			echo "<h1>your Reservation Informatin has been successfully submited <br> please wait for response of our customer support team.</h1>";
            
		} else{
			echo "ERROR: Sorry $sql. ". mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
        <button class="btn btn-warning"><a href="..\index.html">Continue Visiting</a></button>
	</center>
</body>

</html>
