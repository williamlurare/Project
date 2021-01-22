<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle management'); 

   $sql="DELETE FROM `driver` WHERE driverid='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: driver.php");
   }else{
         echo "Not deleted";
   }
   
?>
