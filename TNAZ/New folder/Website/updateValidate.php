<?php


 $connection= mysqli_connect('localhost','root','','vehicle management');
   $msg= "" ;     


        
$sql = "UPDATE user SET first_name='?',last_name='?', email='?',username='?', password='?' WHERE user_id='?';
";

if (mysqli_query($connection, $sql)) {
  echo "<script>alert('Profile updated Succssfully');</script>";

  header("location:mybill.php");

} else {
  echo "Error updating record: " . mysqli_error($connection);
}

mysqli_close($connection);
?>