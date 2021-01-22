<?php 
    session_start();
    $connection=mysqli_connect("localhost","root","","vehicle management"); 
    
    $msg="";
    if(isset($_POST['submit'])){

        $username=mysqli_real_escape_string($connection,strtolower($_POST['username']));
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $login_query="SELECT * FROM `admin` WHERE username='$username' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['username']=$username;
            header('Location:admin.php');
        } 
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';
        }
    }

?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300italic,300,400italic,700,900' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="styleA.css">
<link rel="icon" href="img/ow.png" type="image/gif" sizes="16x16">

</head>
<body>

<div class="auth-wrap-background">
  <div class="auth-center">
    <div class="auth-blur auth-size">
      <div class="auth-wrap-background"></div>
    </div>
  </div>
  <div class="auth-center">
    <div class="auth__inner auth-size">
      <div class="auth__sidebar auth__inner__section"></div>
      <div class="auth__form auth__inner__section">
        <div class="form">

        <?php echo $msg; ?>
        <form action="" method="post"> 
          <h1 class="form__title">Admin Login</h1>
          <label class="form__label"><span class="form__label__text">Username</span>
            <input class="form__input" name="username" type="text">
            <div class="form__input-border"></div>
          </label>
          <label class="form__label"><span class="form__label__text">Password</span>
            <input class="form__input" name="password" type="password" >
            <div class="form__input-border" ></div>
          </label>
          <button type="submit" name="submit" class="button">Log in</button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
