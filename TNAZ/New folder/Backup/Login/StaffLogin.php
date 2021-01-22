<!DOCTYPE html>
<?php 
  
    $connection=mysqli_connect("localhost","root","","vehicle management"); 
    
    $msg1="";
    if(isset($_POST['submit'])){

      session_start();

      $_SESSION['driverid'] = $_POST['driverid'];

   

        $drname=mysqli_real_escape_string($connection,strtolower($_POST['drname']));
        
        $driverid=mysqli_real_escape_string($connection,$_POST['driverid']); 
        
        $login_query="SELECT * FROM `driver` WHERE drname='$drname' and driverid='$driverid'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['driverid']=$driverid;
            header('Location:../Website/StaffPanel.php');
        } 
        else{
             $msg1= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <strong>Unsuccessful!</strong> Invalid Username!.
                  </div>';
        }
    }

?>



<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Staff Log in</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./styleStaff.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
<?php echo $msg1; ?>

  <form class="login" action="" method="POST">
    <p class="title">Staff Log in</p>
    <input type="text" placeholder="Driver's Name" name="drname" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="ID" name="driverid" />
    <i class="fa fa-key"></i>
    <button class="state" name="submit"  type="submit" value="submit">    <i class="spinner"></i>Sign In</button>

    </button>
  </form>
  </p>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
