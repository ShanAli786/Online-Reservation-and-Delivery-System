<?php  
          
          session_start();
          $con = mysqli_connect("localhost", "root", "");
          mysqli_select_db($con, 'logen');
          //=======================================
           $user = $_POST['user'];

           $password = $_POST['password'];
          $s = "select * from logintable where user = '$user' && password = '$password' ";
         
          $result = mysqli_query($con, $s);
          
          $num = mysqli_num_rows($result);
          
          if ($num == 1) {
            header('location:administrator.html');
          } else {
            header('location:login.php');
          }
         
?>