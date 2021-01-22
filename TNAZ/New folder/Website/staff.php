<?php
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 

require_once("config.php");

$driverid= $_SESSION['driverid'];

if(isset($_GET['page']))
{

    $page = $_GET['page'];

}
else{
    $page = 1;

}
    
    $num_per_page = 05;
    $start_from = ($page-1)*05;



    $query = "SELECT * FROM booking limit $start_from, $num_per_page";
    $result = mysqli_query($mysqli,$query);
    $query1 = "SELECT * FROM driver WHERE driverid='$driverid'";
    $result1 = mysqli_query($mysqli,$query1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff Panel</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

<style>


.content-table{

        border-collapse: collaspe;
        margin: 25px 0;
        font-size: 0.9em;
        width: 100%;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}


 .content-table thead tr{

    background-color: #009879;
    color: white;
    text-align: left;
    font-weight: bold;

 }


.content-table th,
.content-table td {

    padding: 12px 15px;

}

.content-table tbody tr{
    
    border-bottom: 1px solid whitesmoke;

}


.content-table tbody tr:nth-of-type(even){

background-color: #f3f3f3;
    
}


.content-table tbody tr:last-of-type{

border-bottom: 2px solid #009879;
    
}

.content-table tbody tr:active-row{

    font-weight: bold;
    color: #009879;

}

</style>




</head>
<body>
   <?php include 'navbarStaff.php'?>
   
   <br><br>
   <div class="container">
       <div class="row">
           <div class="page-header">
               <h1 style="text-align: center">Staff Panel</h1>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-8">
              <table class="content-table">
             
              <thead>
              <tr>
                    <th>Personal Info<th>
                    </thead>
             
              <thead>
              <tr>
                    <th>Driver ID<th>
                    <th>Driver Name<th>
                    <th>Driver Lincense<th>
                    <th>Mobile Number<th>
              </tr>
              </thead>
              <tbody>
                  
              <tr>

              <?php 
                    while($row=mysqli_fetch_assoc($result1)){
            
            
            ?>


                    <th><?php echo $row['driverid'] ?><th>
                    <th><?php echo $row['drname'] ?><th>
                    <th><?php echo $row['drlicense'] ?><th>
                    <th><?php echo $row['drmobile'] ?><th>

                    </tr>
                    <?php 
                    }
                    ?>                    
              

                </table>

           <div class="col-md-2"></div>
       </div>
   </div>
</body>
</html>