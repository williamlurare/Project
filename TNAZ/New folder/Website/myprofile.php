<?php 
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 
    
   
    //echo $username;
    
    $connection= mysqli_connect('localhost','root','','vehicle management');

       
  


    if(isset($_POST['update']))
    {

      $username = $_SESSION['username'];
   //   $uname = $_SESSION['uname'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    

    $sql = "UPDATE  user set first_name='".$fname."',last_name='".$lname."',email='".$email."', password='".$pass."' where username= '".$username."'";


    if (mysqli_query($connection, $sql)) {
      echo"<script>alert('Record updated successfully');</script>";
  } else {
    echo"<script>alert('Error updating record:');</script> " . mysqli_error($connection);
    }
  }
   
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesR.css">
    <link rel="icon" href="img/ow.png" type="image/gif" sizes="16x16">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">My Profile</h1>

                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                
                <div class="input-group">
                  <span class="input-group-addon"><b>First Name</b></span>
                  <input id="drname" type="text" class="form-control" name="fname" placeholder="Enter First Name">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Last Name</b></span>
                  <input id="drmobile" type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Email</b></span>
                  <input id="drjoin" type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
                <br>


        
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Password</b></span>
                  <input id="drnid" type="text" class="form-control" name="pass" placeholder="EnterPassword">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Confirm Password</b></span>
                  <input id="drlicense" type="text" class="form-control" name="pass1" placeholder="Confirm Password">
                </div>
                <br>
                
             
                 
                
                <div class="input-group">
                  <input type="submit" name="update" class="btn btn-success">
                  
                </div>
              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
</body>
</html>