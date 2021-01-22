<?php
    session_start();
    $driverid= $_SESSION['driverid'];
     $connection= mysqli_connect('localhost','root','','vehicle management');
    $select_query="SELECT * FROM `booking` WHERE driverid= '$driverid' ORDER BY booking_id DESC";
    $result= mysqli_query($connection,$select_query);


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking list</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'navbarStaff.php'; ?>
  <br><br>
   <div class="container">
        <div class="row">
           <div class="col-md-12">
             <div class="page-header">
                <h1 style="text-align: center;">Log</h1>
                 
              </div> 
              <table id="myTable" class="table table-bordered animated bounce">
                <thead>
                    
                    <th>Booking Id</th>
                    <th>Name</th>
                    <th>department</th>
                    <th>type</th>
                    <th>req_date</th>
                    <th>req_time</th>
                    <th>ret_date</th>
                    <th>ret_time</th>
                    <th>destination</th>
                    <th>pickup_point</th>
                    <th>mobile</th>
                 
                  
                 
                  
                </thead>
                
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row['booking_id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['req_date']; ?></td>
                        <td><?php echo $row['req_time']; ?></td>
                        <td><?php echo $row['ret_date']; ?></td>
                        <td><?php echo $row['ret_time']; ?></td>
                        <td><?php echo $row['destination']; ?></td>
                        <td><?php echo $row['pickup_point']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>

                       
                        
                       
                        
                      
                        
                     
                    

                    <?php }   ?>
                </tbody>
            </table>
            </div>
        </div>
        
        
   </div>  
</body>

<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>