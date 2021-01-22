<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle management'); 

   $sql="DELETE FROM `vehicle` WHERE veh_id='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: vehicle.php");
   }else{
         echo "Not deleted";
   }
   
?>
