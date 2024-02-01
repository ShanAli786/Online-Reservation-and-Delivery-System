
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

	<tbody>

<?php

include 'connection.php';
$selectquery  = "Select name, from book_table ";

$query  = mysqli_query($con, $selectquery);


$nums = mysqli_num_rows($query);
$res = mysqli_fetch_array($query);

while(mysqli_fetch_array($query)){

 
?>
	<tr>	
	
	<td><?php  echo $res['name']?></td>
	<td><?php  echo $res['country']?></td>
	<td><?php  echo $res['date']?></td>
	<td><?php  echo $res['time']?></td>
	<td><?php  echo $res['phone_no']?></td>
	<td><?php  echo $res['email']?></td>
	<td><?php  echo $res['persons']?></td>
        
	
    </tr> 
<?php
}

?>

	</tbody> 
 </table>

</div>
</body>
</html>
