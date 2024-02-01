
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="LoginStyleSheet.css">
    <script src="https://kit.fontawesome.com/91d0125610.js" crossorigin="anonymous"></script>
</head>
<style>
  body{
    background-image: url('foodie.jfif');
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
  }
</style>
<body>
   
    <div class="login container col-lg-4 col-md-4 col-sm-4 ">
        <p id="sp1"> <i>Login Page</i></p>
        <form  class="container" action="connectionadmin.php" method="POST" autocomplete="on">
            <div class="form-group container">
                <input type="text" class="f form-control" name="user" id=""  placeholder="user" tabindex="1" maxlength = "20" autofocus required><br>
                <input type="password" class="f form-control" name="password" id="" placeholder="Password" tabindex="2" required><br>
                <a class = "button" href="ForgetPassword.php" tabindex="4">Forget Password?</a>
                <input type="submit" class="button" value="Login" tabindex="3" name="btn">
            </div>
        </form>
    </div>

    
    <!-- </div> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="index.js"></script>
    <?php 
        if(isset($_SESSION['err']))
        {
            unset($_SESSION['err']);   
        }
    ?>
</body>
</html>