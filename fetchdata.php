<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "booktable";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `book_table`;";

?>
<html>

    <style>
    
		h2{
			margin-left: 400px;
			color: white;
			font-size: 50px;
			font-family: georgia;
			margin-bottom: 40px;
			padding-bottom: 30px;
		}
		h4{
			
			color: white;
		}
		body{
			background-size: cover;
		}
		th{
            padding-left: 5px;
			color: black;
		}
		
		#end{
			margin-left: 82%;
			justify-content: center;
			width: 78px;
			color: red;
		}
    td{
        padding-left: 20px;
    }

	</style>
    <body>
	<div class  = "main-div">
	
	<h1>Reservation data of clients</h1>
	
 <table>
	<thead>
		<tr>
			
			<th>Name</th>
			<th>Address</th>
			<th>Date</th>
			<th>Time</th>
            <th>Phone_no</th>
			<th>Email</th>
            
			<th>Persons</th>
			
		<tr>
	</thead>

     <?php

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			?>
        <tr>	
	
	<td><?php  echo $row['name']?></td>
	<td><?php  echo $row['country']?></td>
	<td><?php  echo $row['date']?></td>
	<td><?php  echo $row['time']?></td>
	<td><?php  echo $row['phone_no']?></td>
	<td><?php  echo $row['email']?></td>
	<td><?php  echo $row['persons']?></td>
        
	
    </tr> 
     <?php
            
          
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>
