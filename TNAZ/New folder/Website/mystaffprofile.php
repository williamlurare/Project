<?php 
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 
    
   
    //echo $username;
    
    $connection= mysqli_connect('localhost','root','','vehicle management');

       



    if(isset($_POST['update']))
    {
      $id =$_SESSION['drnid'];
    $drname=$_POST['drname'];
    $drmobile=$_POST['drmobile'];
    $draddress=$_POST['draddress'];
        

    $sql = "UPDATE  driver SET drname='".$drname."',drmobile='".$drmobile."',draddress='".$draddress."' WHERE drnid=".$id."";
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
    <?php include 'navbarStaff.php'; ?>
    
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
                  <span class="input-group-addon"><b>Driver's Name</b></span>
                  <input id="drname" type="text" class="form-control" name="drname" placeholder="Enter Driver's Name">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Driver's Mobile</b></span>
                  <input id="drmobile" type="text" class="form-control" name="drmobile" placeholder="Enter Driver's Mobile">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Driver's Address</b></span>
                  <input id="drjoin" type="text" class="form-control" name="draddress" placeholder="Enter Driver's Address">
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