<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "logen";

    $con  = mysqli_connect($host, $username, $password, $database);

    if (isset($_POST['change_pass'])) {
        $pass=$_POST['newpass'];
      
        $update="UPDATE logintable SET password='$pass' WHERE user='admin'";
        $result = mysqli_query($con, $update);
        if ($result==TRUE) {
            echo "Password change successfully ";
        }
        else{
            echo "Error";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheet.css"> 
    <script src="https://kit.fontawesome.com/91d0125610.js" crossorigin="anonymous"></script>
</head>

<style>
    
    body{
    background-image: url('foodie.jfif');
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
  }
  .changePassword{
    background-color: orange;
    opacity: 0.8;
    margin-top: 20%;
}

@keyframes myfirst {
    0%   {left:600px ; top: 0px; }
    50%  {left:0px ;top: 0px; }
    100% {left:0px;top: 0px; }
  }
  .btn:hover{
      background-color: black;
      color: yellow;
      font-weight: bolder;
  }
</style>
<body>
    
    <main>
        <div class="changePassword form-group container col-sm-4">


                <h4 style="text-align: left; color: white; font-weight: bolder;">Change Your Password...</h4>
                <form action=""  method="POST">
                    <input type="password" class="form-control" name="newpass" id="newpass" placeholder="Enter New Password" required><br>
                    <input type="password" class="form-control" name="confirm" id="confirmpass" placeholder="Confirm Password" required><br>
                    <input type="reset" class="btn btn-danger" value="Reset">
                    <input type="submit" name="change_pass" class="btn btn-danger" value="Change">
                </form>
                

           
        </div>
        
    </main>
    <footer>
    </footer>
    <!-- <script src="assets/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnju     UD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
    <?php 
        if(isset($_SESSION['err']))
        {
            unset($_SESSION['err']);   
        }
        // unset($_SESSION['chngpass']);
    ?> 
</body>
</html> 